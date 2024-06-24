<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Notifikasi') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
              <div class="flex flex-col gap-4 p-6 bg-white border-b border-gray-200 lg:p-8">
                {{-- notif --}}
                @php
                    $pesan = "Pemain dalam performa baik, status performansinya meningkat dan lakukan lah rotasi untuk memainkan pemain.";
                @endphp
                @foreach ($notifikasi as $notif)
                  <div class="p-4 border rounded-md {{ $pesan == $notif->deskripsi ? 'bg-green-50 border-green-400' : 'bg-yellow-50 border-yellow-400' }}">
                      <div class="flex">
                        <div class="flex-shrink-0">
                          @if ($pesan == $notif->deskripsi)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-green-400">
                              <path fill-rule="evenodd" d="M9.661 2.237a.531.531 0 0 1 .678 0 11.947 11.947 0 0 0 7.078 2.749.5.5 0 0 1 .479.425c.069.52.104 1.05.104 1.59 0 5.162-3.26 9.563-7.834 11.256a.48.48 0 0 1-.332 0C5.26 16.564 2 12.163 2 7c0-.538.035-1.069.104-1.589a.5.5 0 0 1 .48-.425 11.947 11.947 0 0 0 7.077-2.75Zm4.196 5.954a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                            </svg>  
                          @else
                            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8.485 3.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 3.495zM10 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 6zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                          @endif
                        </div>
                        <div class="ml-3">
                          <h3 class="text-sm font-medium {{ $pesan == $notif->deskripsi ? 'text-green-800' : 'text-yellow-800' }}">{{ $notif->nama_pemain }}</h3>
                          <div class="mt-2 text-sm {{ $pesan == $notif->deskripsi ? 'text-green-700' : 'text-yellow-700' }}">
                            <p>{{ $notif->deskripsi }}</p>
                          </div>
                        </div>
                      </div>
                  </div>
                @endforeach
              </div>              
          </div>
      </div>
  </div>
</x-app-layout>