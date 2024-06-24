<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Data Detail Team') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200 lg:p-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                  <h1 class="text-2xl font-medium text-gray-900">
                      {{ $team->nama_team }}
                  </h1>
              </div>
            </div>

            <div class="flex items-center justify-between p-4 mt-4 border border-gray-200 rounded-md bg-gray-50 sm:grid sm:grid-cols-5">
              <dl class="grid flex-1 grid-cols-4 col-span-4 text-sm gap-x-6 gap-y-4">
                <div>
                  <dt class="font-medium text-gray-900">Fisik Team</dt>
                  <dd class="mt-1 text-gray-500">{{ $team->total_fisik }}</dd>
                </div>
                <div>
                  <dt class="font-medium text-gray-900">Kecepatan Team</dt>
                  <dd class="mt-1 text-gray-500">{{ $team->total_kecepatan }}</dd>
                </div>
                <div class="hidden sm:block">
                  <dt class="font-medium text-gray-900">Menyerang Team</dt>
                  <dd class="mt-1 text-gray-500">{{ $team->total_penyerangan }}</dd>
                </div>
                <div>
                  <dt class="font-medium text-gray-900">Bertahan Team</dt>
                  <dd class="mt-1 text-gray-500">{{ $team->total_bertahan }}</dd>
                </div>
                <div>
                  <dt class="font-medium text-gray-900">Teknik Team</dt>
                  <dd class="mt-1 text-gray-500">{{ $team->total_teknik }}</dd>
                </div>
                <div>
                  <dt class="font-medium text-gray-900">Overall Kekuatan Team</dt>
                  <dd class="mt-1 font-medium text-gray-500">
                    {{ round(($team->total_fisik + $team->total_kecepatan + $team->total_penyerangan + $team->total_bertahan + $team->total_teknik) / $team->total_pemain) }} 
                  </dd>
                </div>
                <div>
                  <dt class="font-medium text-gray-900">Resource Team</dt>
                  <dd class="mt-1 font-medium text-gray-500">Rp. {{ number_format($team->resource, 2, ',', '.') }}</dd>
                </div>
              </dl>
              <div class="flex justify-end">
                <a href="{{ route('team.index') }}" class="flex items-center justify-center w-full px-4 py-2 mt-6 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                  Kembali
                </a>
              </div>
            </div>

            <div class="flex mt-10 gap-x-[5rem]">
              <div class="">
                <img class="w-[20rem]" src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->nama_team }}">
              </div>
              
              <div class="w-full">
                <div class="sm:flex sm:items-center">
                  <div class="sm:flex-auto">
                      <h1 class="text-lg font-medium text-gray-900">
                        Daftar pemain dalam team
                      </h1>
                  </div>
                </div>
                
                <div class="relative mt-4 overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                  <table class="w-full divide-y divide-gray-300 table-fixed">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3.5 pr-3 px-6 text-left text-sm font-semibold text-gray-900">No</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nama Pemain</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Umur</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Posisi</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Overall Rate</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @php
                        $counter = 0;
                      @endphp
                      @foreach ($pemain_team as $pt)
                        @if ($pt->team->id == $team->id)
                        @php
                          $counter++;
                        @endphp
                          <tr>
                            <td class="px-6 py-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap">{{ $counter }}</td>
                            <td class="px-3 py-4 pr-3 text-sm text-gray-500 whitespace-nowrap">{{ $pt->nama }}</td>
                            <td class="px-3 py-4 pr-3 text-sm text-gray-500 whitespace-nowrap">{{ $pt->umur }}</td>
                            <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $pt->posisi }}</td>
                            {{-- <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">Rate {{ round(($pt->performansi->fisik + $pt->performansi->kecepatan + $pt->performansi->penyerangan + $pt->performansi->bertahan + $pt->performansi->teknik) / 5) }}</td> --}}
                            <td class="py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                              <div class="flex justify-end gap-2">
                                <a href="{{ route('pemain.show', $pt->slug) }}" class="text-indigo-600 hover:text-indigo-900">
                                  Lihat Pemain
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>              
        </div>
      </div>
    </div>
</x-app-layout>

