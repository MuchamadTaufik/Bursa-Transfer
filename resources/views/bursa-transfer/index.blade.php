<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Bursa Transfer') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200 lg:p-8">
                  <div class="sm:flex sm:items-center">
                      <div class="sm:flex-auto">
                          <h1 class="text-2xl font-medium text-gray-900">
                              Tabel pemain dalam transfer
                          </h1>
                      </div>
                  </div>

                  <div class="flex flex-col mt-8">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300 table-fixed">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="relative w-12 px-6 text-sm font-semibold text-gray-900">No</th>
                                        <th scope="col" class="py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">Nama Pemain</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Posisi</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Team</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Overall Rate</th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                  @php
                                      $counter = 0;
                                  @endphp
                                  @forelse ($pemains as $pemain)
                                      @php
                                          $counter++;
                                      @endphp
                                      @if (Auth::user()->id != $pemain->team->user_id)
                                      <tr>
                                        <td class="relative w-12 px-6 sm:w-16 sm:px-8">{{ $counter }}</td>
                                        <td class="flex items-center gap-2 py-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            <img class="rounded-full w-7" src="{{ asset('storage/' . $pemain->photo) }}" alt="{{ $pemain->nama }}">
                                            <span class="text-sm font-medium text-gray-900 whitespace-nowrap">{{ $pemain->nama }}</span>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $pemain->posisi }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @if ($pemain->team_id == null)
                                            Belum ada team
                                            @else
                                            {{ $pemain->team->nama_team }}
                                            @endif
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @if ($pemain->performansi == null)
                                            Belum ada performansi
                                            @else
                                            Rate {{ round(($pemain->performansi->fisik + $pemain->performansi->kecepatan + $pemain->performansi->penyerangan + $pemain->performansi->bertahan + $pemain->performansi->teknik) / 5) }}
                                            @endif
                                        </td>
                                        <td class="py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                            <div class="flex items-center justify-end gap-2">
                                                <form action="{{ route('bursa-transfer.update', $pemain->slug) }}" class="flex items-center justify-center gap-1" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    {{-- <input type="hidden" name="harga_pemain" value="{{ $pemain->harga }}">
                                                    <input type="hidden" name="id_pemain" value="{{ $pemain->id }}"> --}}
                                                    <input type="hidden" name="team_id" value="{{ Auth::user()->team()->first()->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-indigo-600 cursor-pointer hover:text-indigo-900">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                    </svg>      
                                                    <button type="submit" class="text-indigo-600 cursor-pointer hover:text-indigo-900">Beli Pemain</button>                             
                                                </form> 
                                            </div>
                                        </td>
                                    </tr>
                                      @endif
                                  @empty
                                      <tr>
                                          <td class="py-4 pr-3 text-sm font-medium text-center text-gray-900 whitespace-nowrap" colspan="7">Data tidak di temukan</td>
                                      </tr>
                                  @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>

              </div>              
          </div>
      </div>
  </div>
</x-app-layout>