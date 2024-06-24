<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Edit Performansi Pemain') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
              <div class="flex flex-col p-6 bg-white border-b border-gray-200 lg:p-8">

                <div class="p-4 mt-4 border border-gray-200 rounded-md bg-gray-50">
                  <dl class="flex flex-wrap justify-between text-sm gap-x-6">
                    <div class="flex items-center">
                      <div class="flex w-12">
                        <img src="{{ $pemain->photo ? asset('storage/' . $pemain->photo) : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="{{ $pemain->nama }}" class="rounded-full">
                      </div>
                      <div class="ml-3">
                        <dt class="font-medium text-gray-900">Nama Pemain</dt>
                        <dd class="mt-1 text-gray-500">{{ $pemain->nama }}</dd>
                      </div>
                    </div>
                    <div class="hidden sm:block">
                      <dt class="font-medium text-gray-900">Team</dt>
                      <dd class="mt-1 text-gray-500">
                        @if ($pemain->team_id == null)
                        Belum ada team
                        @else
                        {{ $pemain->team->nama_team }}
                        @endif
                      </dd>
                    </div>
                    <div class="hidden sm:block">
                      <dt class="font-medium text-gray-900">Posisi</dt>
                      <dd class="mt-1 text-gray-500">{{ $pemain->posisi }}</dd>
                    </div>
                    <div>
                      <dt class="font-medium text-gray-900">No Punggung</dt>
                      <dd class="mt-1 font-medium text-gray-500">{{ $pemain->no_punggung }}</dd>
                    </div>
                    <div>
                      <dt class="font-medium text-gray-900">Umur</dt>
                      <dd class="mt-1 font-medium text-gray-500">{{ $pemain->umur }} Tahun</dd>
                    </div>
                    <div>
                      <dt class="font-medium text-gray-900">Asal</dt>
                      <dd class="mt-1 font-medium text-gray-500">{{ $pemain->asal }}</dd>
                    </div>
                    <div>
                      <dt class="font-medium text-gray-900">Harga</dt>
                      <dd class="mt-1 font-medium text-gray-500">Rp. {{ number_format($pemain->harga, 2, ',', '.') }}</dd>
                    </div>
                  </dl>
                </div>
                
                <form action="{{ route('performansi.update', $pemain->slug) }}" method="POST" class="mt-5">
                  @method('put')
                  @csrf
                  <div class="grid grid-cols-6 gap-6">
                    
                    <div class="col-span-2">
                      <label for="gol" class="block text-sm font-medium text-gray-700">Gol</label>
                      <input type="number" name="gol" id="gol" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->gol ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="assist" class="block text-sm font-medium text-gray-700">Assist</label>
                      <input type="number" name="assist" id="assist" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->assist ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="pertandingan" class="block text-sm font-medium text-gray-700">Pertandingan</label>
                      <input type="number" name="pertandingan" id="pertandingan" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->pertandingan ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="kartu_kuning" class="block text-sm font-medium text-gray-700">Kartu Kuning</label>
                      <input type="number" name="kartu_kuning" id="kartu_kuning" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->kartu_kuning ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="kartu_merah" class="block text-sm font-medium text-gray-700">Kartu Merah</label>
                      <input type="number" name="kartu_merah" id="kartu_merah" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->kartu_merah ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="fisik" class="block text-sm font-medium text-gray-700">Fisik</label>
                      <input type="number" name="fisik" id="fisik" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->fisik ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="kecepatan" class="block text-sm font-medium text-gray-700">Kecepatan</label>
                      <input type="number" name="kecepatan" id="kecepatan" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->kecepatan ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="penyerangan" class="block text-sm font-medium text-gray-700">Penyerangan</label>
                      <input type="number" name="penyerangan" id="penyerangan" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->penyerangan ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="bertahan" class="block text-sm font-medium text-gray-700">Bertahan</label>
                      <input type="number" name="bertahan" id="bertahan" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->bertahan ?? 0 }}"/>
                    </div>
                    
                    <div class="col-span-2">
                      <label for="teknik" class="block text-sm font-medium text-gray-700">Teknik</label>
                      <input type="number" name="teknik" id="teknik" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" value="{{ optional($pemain->performansi)->teknik ?? 0 }}"/>
                    </div>
                  </div>
                  
                  <div class="flex justify-end gap-2 mt-4 text-right">
                    <div class="flex">
                      <a href="{{ route('performansi.index') }}" class="flex items-center justify-center w-full px-4 py-2 mt-6 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                        Kembali
                      </a>
                    </div>
                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
                  </div>
                </form>
              </div>              
          </div>
      </div>
  </div>
</x-app-layout>

<script>
  function previewImage(input) {
    const preview = document.getElementById('image-preview');
    const fileNameSpan = document.getElementById('file-name');
    const file = input.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.classList.remove('hidden');
      };

      reader.readAsDataURL(file);

      // Update the span content with the file name
      fileNameSpan.textContent = file.name;
    }
  }
</script>
