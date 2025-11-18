@push('style')
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

  <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"/>
@endpush
<div class="max-w-4xl relative p-4 bg-white rounded-lg border dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Post</h3>
            </div>
            <!-- Modal body -->
            <form action="/dashboard/{{ $post->slug }}" method="POST" id="post-form" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
                    <div class="mb-4">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" id="title" class="@error('title') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type post title" autofocus value="{{ old('title') ?? $post->title }}">
                        @error('title')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                      <select id="category" name="category_id" class="@error('category_id') bg-red-50 border-red-500 text-red-700 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="">Select post category</option>
                        @foreach (App\Models\Category::get() as $category )
                          <option value="{{ $category->id }}" @selected((old('category_id') ?? $post->category_id ) == $category->id)>{{ $category->name }}</option>
                        @endforeach
                      </select>
                      @error('category_id')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                      <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                      <textarea id="body" name="body" class="hidden @error('body') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write post body here">{{ old('body') ?? $post->body }}</textarea>
                      <div id="editor">{!! old('body', $post->body) !!}</div>
                      @error('body')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror
                    </div>

          <div class="mb-4">
            <label class="block mb-2 text-sm font-medium text-gray-800 dark:text-white" for="cover">Update Cover</label>
            <input class="@error('cover') bg-red-50 border-red-500 text-red-700 placeholder-red-700 focus:ring-red-500 focus:border-red-500 @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="cover_help" id="cover" type="file" name="cover" accept="image/png, image/jpeg, image/jpg" value="{{ $post->cover }}">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="cover_help">.png or .jpg</div>
            @error('cover')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <img id="cover-preview" class="h-auto max-w-lg mx-auto rounded-base" src="{{ $post->cover ? asset('storage/' . $post->cover) : asset('img/user.png') }}" alt="">
        </div>

              <div class="flex space-x-4">
                <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Update post
                </button>
                  <a href="/dashboard" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Cancel
                </a>
                </div>
            </form>
        </div>

@push('script')
<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: 'Write post body here...',
  });

  const postForm = document.querySelector('#post-form');
  const postBody = document.querySelector('#body');
  const quillEditor = document.querySelector('#editor');

  postForm.addEventListener('submit', function(e){
    e.preventDefault();

    const quillContent = quillEditor.children[0].innerHTML;
    postBody.value = quillContent;
    this.submit();
  });

</script>

<script>
    const input = document.getElementById('cover');
    const previewPhoto = () => {
        const file = input.files;
        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById('cover-preview');
            fileReader.onload = function(event) {
                preview.setAttribute('src', event.target.result);
                }
            fileReader.readAsDataURL(file[0]);
            }
    }
    input.addEventListener("change", previewPhoto);
</script>

{{-- file pond --}}
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>

<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginFileValidateSize);
    FilePond.registerPlugin(FilePondPluginImageTransform);
    FilePond.registerPlugin(FilePondPluginImageResize);

    // Get a reference to the file input element
    const inputElement = document.querySelector('#cover');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg'],
        maxFileSize: '5MB',
        imageResizeTargetWidth: 600,
        imageResizeMode: 'contain',
        imageResizeUpscale: false,
        server: {
            url: '/updatecover',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    }
    });
</script>

@endpush