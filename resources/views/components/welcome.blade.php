<div class="p-6 bg-white border-b border-gray-200 lg:p-8">
    <h1 class="text-2xl font-medium text-gray-900">
        Selamat datang di aplikasi BUSER 
    </h1>

    <p class="mt-6 leading-relaxed text-justify text-gray-500">
        Aplikasi BUSER (Bursa Transfer) adalah solusi inovatif yang merangkul semangat dinamis
        dunia sepakbola Indonesia. Dengan fokus pada bursa transfer pemain, BUSER memberikan
        pengalaman terkini dan terpercaya bagi pengguna untuk mengikuti perkembangan transfer
        pemain sepakbola dengan mudah. Jelajahi informasi detil, peroleh wawasan mendalam, dan tetap
        terhubung dengan setiap perubahan signifikan dalam komunitas sepakbola Indonesia melalui
        aplikasi BUSER yang intuitif dan informatif ini.
    </p>
</div>

<div class="grid grid-cols-1 gap-6 p-6 bg-gray-200 bg-opacity-25 md:grid-cols-2 lg:gap-8 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>              
            <h2 class="text-xl font-semibold text-gray-900 ms-3">
                <a href="{{ route('team.index') }}">Team</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500">
            Team pada aplikasi BUSER terdiri dari berbagai macam pemain sepakbola dan kemampuan masing-masing pemain, sehingga membuat tim mempunyai kekuatan dan kelemahannya tersediri antara team lain pada aplikasi BUSER.
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ route('team.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                Lihat data team

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-5 h-5 ms-1 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
            </svg>              
            <h2 class="text-xl font-semibold text-gray-900 ms-3">
                <a href="{{ route('performansi.index') }}">Performansi</a>
            </h2>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-gray-500">
            Setiap pemain mempunyai kemampuannya tersendiri. Kemampuan pemain dapat di update berdasarkan hasil permainan mereka melalui form performansi nantinya. Semakin tinggi performan pemain, maka akan semakin bagus untuk team.
        </p>

        <p class="mt-4 text-sm">
            <a href="{{ route('performansi.index') }}" class="inline-flex items-center font-semibold text-indigo-700">
                Lihat performansi pemain

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-5 h-5 ms-1 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
</div>
