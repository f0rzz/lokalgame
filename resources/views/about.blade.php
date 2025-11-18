<x-layout :title="$title">
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
      <div class="mx-auto mb-8 max-w-screen-lg lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
          <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Sebagai gamer, kita butuh tempat kongkow digital yang isinya lengkap: semua pembahasan seperti berita & ulasan game ada. Tapi, kita juga tahu kalau Game Lokal Indonesia sering terpinggirkan. Melalui lokalgame.id, kita menghadirkan portal komunitas/blog Gaming yang menjawab kebutuhan itu.</p>
          <br>
          <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Seperti forum pada umumnya, tetapi kami membuat web lokalgame.id sebagai komitmen untuk selalu menyertakan, mengangkat, dan mempromosikan Game Lokal di tengah dominasi global. Siapapun boleh baca, tapi kalau mau kontribusi post, wajib login.</p>
      </div> 
      <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/omargambar.png') }}" alt="Bonnie Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Muhammad Omar Mubarok Rangkuti</a>
              </h3>
              <p>Proyek Manager</p>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/yusrilgambar.png') }}" alt="Helene Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Muhamad Yusril</a>
              </h3>
              <p>Designer</p>
          </div>
          <div class="text-center text-gray-500 dark:text-gray-400">
              <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/aldigambar.png') }}" alt="Jese Avatar">
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <a href="#">Rifaldi Mauda</a>
              </h3>
              <p>Developer</p>
          </div>
          
      </div>  
  </div>
</x-layout>