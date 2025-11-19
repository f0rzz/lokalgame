<x-layout :title="$title">
  

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-base md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="posts/karyawan-ea-dilaporkan-frustrasi-karena-didorong-untuk-menggunakan-ai">
            <img src="{{ asset('img/carousel_satu.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </a>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="posts/mitha-and-the-mysterious-door-game-indie-lokal-dengan-story-memikat">
            <img src="{{ asset('img/carousel_dua.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </a>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="posts/summer-game-fest-2025-acts-of-blood-game-indie-lokal-luncurkan-trailer-baru">
            <img src="{{ asset('img/carousel_tiga.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </a>
        </div>
        <!-- Item 4 -->
        {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('img/carousel_tambahan.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div> --}}
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        {{-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button> --}}
    </div>
</div>

<main class="p-4 h-auto pt-5">
    <div class="max-w-screen-sm mb-4">
        <h2 class="text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Top News</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        @foreach ( $newspost as $post ) 
        <div class="rounded-lg h-64 md:h-75">
            <a href="/posts/{{ $post['slug'] }}">
                <img class="rounded-base h-full object-cover " src="{{ 'storage/' . $post['cover'] }}" />
            </a>
        </div>
        @endforeach
    </div>

    <div class="max-w-screen-sm mb-4">
        <h2 class="text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Latest Game Review</h2>
    </div>
    <div class="grid grid-cols-3 gap-4 mb-4">
        @foreach ( $reviewspost as $post )
        <div class="rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72">
            <a href="/posts/{{ $post['slug'] }}">
                <img class="rounded-base h-full object-cover " src="{{ 'storage/' . $post['cover'] }}" />
            </a>
        </div>
        @endforeach
    </div>

    </main>


</x-layout>