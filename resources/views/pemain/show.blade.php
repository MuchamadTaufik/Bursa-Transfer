<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Data Detail Pemain') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 lg:p-8">
          <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
              <h1 class="text-2xl font-medium text-gray-900">
                {{ $pemain->nama }} - {{ $pemain->team->nama_team }} - Rate {{ round(($pemain->performansi->fisik + $pemain->performansi->kecepatan + $pemain->performansi->penyerangan + $pemain->performansi->bertahan + $pemain->performansi->teknik) / 5) }}
              </h1>
            </div>
          </div>

          <div class="flex items-center justify-between p-4 mt-4 border border-gray-200 rounded-md bg-gray-50 sm:grid sm:grid-cols-5">
            <dl class="grid flex-1 grid-cols-5 col-span-4 text-sm gap-x-6 gap-y-4">
              <div>
                <dt class="font-medium text-gray-900">Gol</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->gol }} Gol</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Assist</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->assist }} Assist</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Pertandingan</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->pertandingan }} Pertandingan</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Kartu Kuning</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->kartu_kuning }} Kartu Kuning</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Kartu Merah</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->kartu_merah }} Kartu Merah</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Fisik</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->fisik }} Fisik</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Kecepatan</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->kecepatan }} Kecepatan</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Penyerangan</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->penyerangan }} Penyerangan</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Bertahan</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->bertahan }} Bertahan</dd>
              </div>
              <div>
                <dt class="font-medium text-gray-900">Teknik</dt>
                <dd class="mt-1 text-gray-500">{{ $pemain->performansi->teknik }} Teknik</dd>
              </div>
            </dl>
            <div class="flex justify-end gap-2">
              <a href="{{ route('performansi.index') }}" class="flex items-center justify-center w-full px-4 py-2 mt-6 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                Kembali
              </a>
              <a href="{{ route('pemain.edit', $pemain->slug) }}" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Edit pemain
              </a>
            </div>
          </div>

          <div class="flex mt-10 gap-x-[5rem]">
            <div class="">
              <img class="w-[20rem] rounded-sm" src="{{ asset('storage/' . $pemain->photo) }}" alt="{{ $pemain->nama }}">
            </div>

            @if ($pemain->team_id != null)
            <div class="w-full">
              <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                  <h1 class="text-lg font-medium text-gray-900">
                    Pemain {{ $pemain->team->nama_team }}
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
                      @if ($pt->team->id == $pemain->team_id)
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
            @else
                <h1 class="text-lg font-medium text-gray-900">Pemain belum memiliki team</h1>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>