<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased">
        <div class="bg-white" x-data="{ open: false }">
            <div 
                x-show="open"
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                class="relative z-40 lg:hidden" 
                role="dialog" 
                aria-modal="true"
            >
              <div class="fixed inset-0 bg-black bg-opacity-25"></div>
          
              <div class="fixed inset-0 z-40 flex">
                <div class="relative flex flex-col w-full max-w-xs pb-12 overflow-y-auto bg-white shadow-xl">
                  <div class="flex px-4 py-4">
                    <button @click="open = ! open" type="button" class="inline-flex items-center justify-center p-2 -m-2 text-gray-400 rounded-md">
                      <span class="sr-only">Close menu</span>
                      <!-- Heroicon name: outline/x-mark -->
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
          
                  <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                    @if (Route::has('login'))
                        @auth
                            <div class="flow-root">
                                <a href="{{ url('/dashboard') }}" class="block p-2 -m-2 font-medium text-gray-900">Dashboard</a>
                            </div>
                        @else
                            <div class="flow-root">
                                <a href="{{ route('login') }}" class="block p-2 -m-2 font-medium text-gray-900">Log in</a>
                            </div>

                            @if (Route::has('register'))
                                <div class="flow-root">
                                    <a href="{{ route('register') }}" class="block p-2 -m-2 font-medium text-gray-900">Registrasi</a>
                                </div>
                            @endif
                        @endauth
                    @endif
                  </div>
                </div>
              </div>
            </div>
          
            <header class="relative z-10">
              <nav aria-label="Top">
                <!-- Top navigation -->
                <div class="bg-gray-900">
                  <div class="flex items-center justify-between h-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          
                    <p class="flex-1 text-sm font-medium text-center text-white lg:flex-none">Bursa Transfer</p>
          
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        @if (Route::has('login'))
                            @auth
                                <div class="flow-root">
                                    <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-white hover:text-gray-100">Dashboard</a>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-medium text-white hover:text-gray-100">Log in</a>
                                <span class="w-px h-6 bg-gray-600" aria-hidden="true"></span>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-sm font-medium text-white hover:text-gray-100">Registrasi</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                  </div>
                </div>
          
                <!-- Secondary navigation -->
                <div class="bg-white">
                  <div class="border-b border-gray-200">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                      <div class="flex items-center justify-between h-16">
                        <!-- Logo (lg+) -->
                        <div class="hidden lg:flex lg:items-center lg:justify-center lg:mx-auto">
                          <a href="/">
                            <x-application-mark class="block w-auto h-9 animate-spin" />
                          </a>
                        </div>
          
                        <!-- Mobile menu and search (lg-) -->
                        <div class="flex items-center flex-1 lg:hidden">
                          <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                          <button @click="open = ! open" type="button" class="p-2 -ml-2 text-gray-400 bg-white rounded-md">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                          </button>
                        </div>
          
                        <!-- Logo (lg-) -->
                        <a href="/" class="lg:hidden">
                            <x-application-mark class="block w-auto h-9 animate-spin" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </header>
          
            <main>
                <div class="relative overflow-hidden">
                    <div aria-hidden="true" class="absolute inset-0">
                        <div class="absolute inset-0 mx-auto overflow-hidden max-w-7xl xl:px-8">
                            <img src="{{ asset('storage/images/hero.png') }}" alt="" class="object-cover object-center w-full h-full">
                        </div>
                        <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                    </div>
                
                    <section aria-labelledby="sale-heading" class="relative flex flex-col items-center px-4 pt-32 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
                        <div class="max-w-2xl mx-auto lg:max-w-none">
                        <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Bursa Transfer</h2>
                        <p class="max-w-xl mx-auto mt-4 text-xl text-gray-600">Solusi inovatif yang merangkul semangat dinamis dunia sepakbola Indonesia dalam bursa transfer dan performansi pemain sepakbola</p>
                        <a href="{{ route('login') }}" class="inline-block w-full px-8 py-3 mt-6 font-medium text-white bg-gray-900 border border-transparent rounded-md hover:bg-gray-800 sm:w-auto">Log in disini</a>
                        </div>
                    </section>

                    <section aria-labelledby="collections-heading" class="bg-gray-100">
                        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="max-w-2xl py-16 mx-auto sm:py-24 lg:max-w-none lg:py-32">
                            <h2 id="collections-heading" class="text-2xl font-bold text-gray-900">Collections</h2>
                    
                            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                                <div class="relative group">
                                <div class="relative w-full overflow-hidden bg-white rounded-lg h-80 group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                    <img src="../storage/images/team.png" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="object-cover object-center w-full h-full">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Team
                                    </a>
                                </h3>
                                <p class="text-base font-semibold text-gray-900">Akses dalam banyak team</p>
                                </div>
                    
                                <div class="relative group">
                                <div class="relative w-full overflow-hidden bg-white rounded-lg h-80 group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                    <img src="../storage/images/pemain.png" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="object-cover object-center w-full h-full">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Performansi
                                    </a>
                                </h3>
                                <p class="text-base font-semibold text-gray-900">Kelola performa pemain</p>
                                </div>
                    
                                <div class="relative group">
                                <div class="relative w-full overflow-hidden bg-white rounded-lg h-80 group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                    <img src="../storage/images/burtra.png" alt="Collection of four insulated travel bottles on wooden shelf." class="object-cover object-center w-full h-full">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Bursa Transfer
                                    </a>
                                </h3>
                                <p class="text-base font-semibold text-gray-900">Lakukan transfer pemain</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section> 
                </div>
            </main>
          
            <footer aria-labelledby="footer-heading" class="bg-white">
              <h2 id="footer-heading" class="sr-only">Footer</h2>
              <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div>
                  <div class="lg:grid lg:grid-cols-1">
                    <div class="relative flex items-center px-6 py-12 mt-6 sm:py-16 sm:px-10 lg:mt-0">
                      <div class="absolute inset-0 overflow-hidden rounded-lg">
                        <img src="{{ asset('storage/images/hero.png') }}" alt="" class="object-cover object-center w-full h-full saturate-0 filter">
                        <div class="absolute inset-0 bg-indigo-600 bg-opacity-90"></div>
                      </div>
                      <div class="relative max-w-sm mx-auto text-center">
                        <h3 class="text-2xl font-bold tracking-tight text-white">Buser App</h3>
                        <p class="mt-2 text-gray-200">
                          Apakah kamu belum punya akun? Jika belum maka ayok registrasi. <a href="{{ route('register') }}" class="font-bold text-white whitespace-nowrap hover:text-gray-200">Registrasi disini<span aria-hidden="true"> &rarr;</span></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
          
                <div class="py-10 md:flex md:items-center md:justify-center">
                  <div class="text-center md:text-left">
                    <p class="text-sm text-gray-500">&copy; 2023 Bursa Transfer</p>
                  </div>
                </div>
              </div>
            </footer>
        </div>
    </body>
</html>
