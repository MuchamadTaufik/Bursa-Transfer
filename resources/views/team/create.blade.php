<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Tambah Team') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200 lg:p-8">
                  <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">Logo Team</label>
                        <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                          <div class="space-y-1 text-center">
                            <img id="image-preview" class="hidden mx-auto mb-4 rounded-sm" alt="Image Preview" style="max-width: 100%; max-height: 200px;" />
                            <div class="flex justify-center text-sm text-gray-600">
                              <label for="file-upload" class="relative font-medium text-center text-indigo-600 bg-white rounded-md cursor-pointer focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span id="file-name" class="text-center">Upload a file</span>
                                <input id="file-upload" name="logo" type="file" class="sr-only" onchange="previewImage(this)" />
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF max to 10MB</p>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-span-6 sm:col-span-3">
                        <label for="nama_team" class="block text-sm font-medium text-gray-700">Nama Team</label>
                        <input type="text" name="nama_team" id="nama_team" autocomplete="given-name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label for="resource" class="block text-sm font-medium text-gray-700">Resource</label>
                        <div class="flex mt-1 rounded-md shadow-sm">
                          <span class="inline-flex items-center px-3 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">Rp. </span>
                          <input type="number" name="resource" id="resource" class="flex-1 block w-full min-w-0 border-gray-300 rounded-none rounded-r-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                      </div>

                      <div class="col-span-6 sm:col-span-3">
                        <label for="user_id" class="block text-sm font-medium text-gray-700">Manager</label>
                        <select id="user_id" name="user_id" class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                          @foreach ($users as $user)
                            @if ($user->role == "manager")
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    
                    <div class="flex justify-end gap-2 mt-4 text-right">
                      <div class="flex">
                        <a href="{{ route('team.index') }}" class="flex items-center justify-center w-full px-4 py-2 mt-6 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                          Kembali
                        </a>
                      </div>
                      <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Simpan</button>
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
