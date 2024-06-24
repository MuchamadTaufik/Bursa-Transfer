<?php

namespace App\Http\Controllers\Performansi;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use App\Models\Pemain;
use App\Models\Performansi;
use App\Models\Team;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PerformansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('performansi.index', [
            'pemains' => Pemain::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemain $pemain, Performansi $performansi)
    {
        return view('performansi.edit', [
            'pemain' => $pemain,
            'performansi' => $performansi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemain $pemain)
    {
        $validatedData = $request->validate([
            'gol' => 'nullable',
            'assist' => 'nullable',
            'pertandingan' => 'nullable',
            'kartu_kuning' => 'nullable',
            'kartu_merah' => 'nullable',
            'fisik' => 'nullable',
            'kecepatan' => 'nullable',
            'penyerangan' => 'nullable',
            'bertahan' => 'nullable',
            'teknik' => 'nullable',
        ]);

        $notifikasi = round(($validatedData['fisik'] + $validatedData['kecepatan'] + $validatedData['penyerangan'] + $validatedData['bertahan'] + $validatedData['teknik']) / 5);

        if ($notifikasi >= 80) {
            Notifikasi::create([
                'nama_pemain' => $pemain->nama,
                'deskripsi' => 'Pemain dalam performa baik, status performansinya meningkat dan lakukan lah rotasi untuk memainkan pemain.'
            ]);
        } else {
            Notifikasi::create([
                'nama_pemain' => $pemain->nama,
                'deskripsi' => 'Pemain dalam performa tidak baik, status performansinya menurun dan lakukan lah rotasi untuk mengganti pemain.'
            ]);
        }

        $validatedData['pemain_id'] = $pemain->id;

        Performansi::updateOrCreate(
            ['pemain_id' => $pemain->id],
            $validatedData
        );

        Alert::success('Berhasil', 'Performansi pemain di update');

        return redirect('/performansi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
