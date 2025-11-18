<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'News',
            'slug' => 'news',
            'color' => 'bg-red-100'
        ]);
        Category::create([
            'name' => 'Reviews',
            'slug' => 'reviews',
            'color' => 'bg-blue-100'
        ]);
        Category::create([
            'name' => 'Previews',
            'slug' => 'previews',
            'color' => 'bg-green-100',
        ]);
        Category::create([
            'name' => 'Guides / Walkthroughs',
            'slug' => 'guides-walkthroughs',
            'color' => 'bg-yellow-100',
        ]);
        Category::create([
            'name' => 'Features / Editorials',
            'slug' => 'features-editorials',
            'color' => 'bg-indigo-100',
        ]);
        Category::create([
            'name' => 'Esports',
            'slug' => 'esports',
            'color' => 'bg-purple-100',
        ]);
        Category::create([
            'name' => 'Tech & Hardware',
            'slug' => 'tech-hardware',
            'color' => 'bg-pink-100',
        ]);
        Category::create([
            'name' => 'Mobile Games',
            'slug' => 'mobile-games',
            'color' => 'bg-green-100',
        ]);
        Category::create([
            'name' => 'Anime & Pop Culture',
            'slug' => 'anime-pop-culture',
            'color' => 'bg-blue-100',
        ]);
    }
}
