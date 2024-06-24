<?php

namespace App\Http\Controllers\BursaTransfer;

use App\Http\Controllers\Controller;
use App\Models\Pemain;
use App\Models\Performansi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BursaTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bursa-transfer.index', [
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemain $pemain)
    {
        $validatedData = $request->validate([
            // 'harga_pemain' => 'nullable',
            // 'id_pemain' => 'nullable',
            'team_id' => 'nullable',
        ]);

        if (array_key_exists('id_team', $validatedData)) {
            // Update kolom 'team_id' pada model Pemain
            $pemain->team_id = $validatedData['team_id'];
            $pemain->save();
        } else {
            // Jika 'id_team' tidak ada dalam data yang diupdate, hanya gunakan metode update
            Pemain::where('id', $pemain->id)->update($validatedData);
        }

        Alert::success('Berhasil', 'Pemain baru telah ditambahkan ke dalam team');

        return redirect('/bursa-transfer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
