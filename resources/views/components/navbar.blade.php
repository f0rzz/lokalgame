  {{-- <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
              <x-my-nav-link href="/" :current="request()->is('/')">Home</x-my-nav-link>
              <x-my-nav-link href="/posts" :current="request()->is('posts')">Blog</x-my-nav-link>
              <x-my-nav-link href="/about" :current="request()->is('about')">About</x-my-nav-link>
            </div>
          </div>
        </div>
        
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            <el-dropdown class="relative ml-3">
              @if (Auth::check())
              <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 cursor-pointer">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('img/user.png') }}" alt="{{ Auth::user()->name }}" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
                <span class="ml-4 text-sm font-medium text-gray-300">{{ Auth::user()->name }}</span>`
              </button>
              @else
              <a href="/login" class="text-sm font-medium text-white hover:underline">Login</a>
              <span class="text-sm font-medium text-white ml-4">|</span>
              <a href="/register" class="ml-4 text-sm font-medium text-white hover:underline">Register</a>
              @endif

              <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Dashboard</a>
                <form action="/logout" method="POST">
                  @csrf
                <button class="block px-4 py-2 w-full text-left text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden cursor-pointer" type="submit">Log out</button>
                </form>
              </el-menu>
            </el-dropdown>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
          <x-my-nav-link class="block" href="/" :current="request()->is('/')">Home</x-my-nav-link>
          <x-my-nav-link class="block" href="/posts" :current="request()->is('posts')">Blog</x-my-nav-link>
          <x-my-nav-link class="block" href="/about" :current="request()->is('about')">About</x-my-nav-link>
      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        @if (Auth::check())
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('img/user.png') }}" alt="{{ Auth::user()->name }}" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">{{ Auth::user()->name }}</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="/dashboard" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Dashboard</a>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Log out</button>
        </div>
        @else
        <div class="space-y-1 px-2">
          <a href="/login" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Login</a>
          <a href="/register" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Register</a>
        </div>
        @endif
      </div>
    </el-disclosure>
  </nav> --}}

{{-- flowbite --}}

    <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
      <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
          <button
            data-drawer-target="drawer-navigation"
            data-drawer-toggle="drawer-navigation"
            aria-controls="drawer-navigation"
            class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg
              aria-hidden="true"
              class="w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg
              aria-hidden="true"
              class="hidden w-6 h-6"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Toggle sidebar</span>
          </button>
          <a href="/" class="flex items-center justify-between mr-4">
            <img
              src="{{ asset('img/lokalgameblack.png') }}"
              class="mr-3 h-8"
              alt="lokalgame logo"/>
            {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> --}}
          </a>
        </div>
        <div class="flex items-center lg:order-2">
          @if (Auth::check())
          <button
            type="button"
            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button"
            aria-expanded="false"
            data-dropdown-toggle="dropdown"
          >
            <span class="sr-only">Open user menu</span>
            <img
              class="w-8 h-8 rounded-full"
              src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('img/user.png') }}" alt="{{ Auth::user()->name }}
              alt="user photo"
            />
          </button>
          @else
          <div class="flex pr-6">
          <a href="/login" class="text-sm font-medium text-gray-900 hover:underline">Login</a>
          <span class="text-sm font-medium text-gray-900 ml-4">|</span>
          <a href="/register" class="ml-4 text-sm font-medium text-gray-900 hover:underline">Register</a>
          </div>
          @endif
          <!-- Dropdown menu -->
          <div
            class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
            id="dropdown">
            @if (Auth::check())
            <div class="py-3 px-4">
              <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
              <span class="block text-sm text-gray-900 truncate dark:text-white">{{ Auth::user()->email }}</span>
            </div>
            @endif
            <ul
              class="py-1 text-gray-700 dark:text-gray-300"
              aria-labelledby="dropdown">
              <li>
                <a href="/dashboard" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="/profile" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account settings</a>
              </li>
            </ul>
            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button
                    type="submit" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log out
                  <button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Sidebar -->

    <aside
      class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
      aria-label="Sidenav"
      id="drawer-navigation">
      <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2">
          <li>
            <x-my-nav-link href="/" :current="request()->is('/')" class="flex justify-center">Home</x-my-nav-link>
          </li>
          <li>
            <x-my-nav-link href="/posts" :current="request()->is('posts')" class="flex justify-center">News</x-my-nav-link>
          </li>
          <li>
            <x-my-nav-link href="/about" :current="request()->is('about')" class="flex justify-center">About</x-my-nav-link>
          </li>
        </ul>
      </div>
    </aside>