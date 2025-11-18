<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->where('author_id', Auth::user()->id);

        if (request('keyword')) {
            $posts->where('title', 'like', '%' . request('keyword') . '%');
        }

        return view('dashboard.index', ['posts' => $posts->paginate(5)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // validation
        // $request->validate([
        //     'title' => 'required|max:255|unique:posts|min:4',
        //     'body' => 'required',
        //     'category_id' => 'required|exists:categories,id'
        // ]);

        Validator::make($request->all(), [
            'title' => 'required|max:255|unique:posts|min:4',
            'body' => 'required|min:50',
            'category_id' => 'required|exists:categories,id',
            'cover' => 'required'
        ], [
            'title.required' => 'Judul wajib diisi',
            'title.unique' => 'Judul sudah ada di database',
            'category_id.required' => 'Kategori tidak ditemukan',
            'cover.required' => 'Cover wajib diupload',
        ])->validate();

        $newFileName = Str::after($request->cover, 'tmp/');
        Storage::disk(config('filesystems.default_public_disk'))->move($request->cover, 'covers/' . $newFileName);

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'author_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'cover' => 'covers/' . $newFileName
        ]);

        return redirect('/dashboard')->with(['success' => 'Post baru berhasil ditambahkan!']);
    }

    public function uploadcover(Request $request)
    {
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('tmp', config('filesystems.default_public_disk'));
        }
        return $path;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('dashboard.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        // validation
        $request->validate([
            'title' => 'required|max:255|min:4|unique:posts,title,' . $post->id,
            'body' => 'required',
            'category_id' => 'required',
            'cover' => 'required'
        ]);

        $validated = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'author_id' => Auth::user()->id,
            'category_id' => $request->category_id
        ];

        if ($request->cover) {
            if (!empty($post->cover)) {
                // Delete old cover
                Storage::disk('public')->delete($post->cover);
            }
            $newFileName = Str::after($request->cover, 'tmp/');
            Storage::disk('public')->move($request->cover, 'covers/' . $newFileName);
            $validated['cover'] = 'covers/' . $newFileName;
        }

        $post->update($validated);

        return redirect('/dashboard')->with(['success' => 'Post berhasil diupdate!']);
    }

    public function updatecover(Request $request)
    {
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('tmp', 'public');
        }
        return $path;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (!empty($post->cover) && Storage::disk('public')->exists($post->cover)) {
            Storage::disk('public')->delete($post->cover);
        }

        $post->delete();
        return redirect('/dashboard')->with(['success' => 'Post berhasil dihapus!']);
    }
}
