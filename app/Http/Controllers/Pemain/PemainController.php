<?php

namespace App\Http\Controllers\Pemain;

use App\Http\Controllers\Controller;
use App\Models\Pemain;
use App\Models\Team;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemain.create', [
            'teams' => Team::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'posisi' => 'nullable',
            'no_punggung' => 'nullable',
            'umur' => 'nullable',
            'harga' => 'nullable',
            'asal' => 'nullable',
            'photo' => 'nullable|image|file|max:1024',
            'performansi_id' => 'nullable',
            'team_id' => 'nullable',
        ]);

        $validatedData['slug'] = SlugService::createSlug(Pemain::class, 'slug', $validatedData['nama']);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('images', 'public');
        }

        Pemain::create($validatedData);

        Alert::success('Berhasil', 'Pemain baru telah di tambahkan');

        return redirect('/performansi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemain $pemain)
    {
        return view('pemain.show', [
            'pemain' => $pemain,
            'pemain_team' => Pemain::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemain $pemain)
    {
        return view('pemain.edit', [
            'pemain' => $pemain,
            'teams' => Team::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemain $pemain)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'posisi' => 'nullable',
            'no_punggung' => 'nullable',
            'umur' => 'nullable',
            'harga' => 'nullable',
            'asal' => 'nullable',
            'photo' => 'nullable|image|file|max:1024',
            'performansi_id' => 'nullable',
            'team_id' => 'nullable',
        ]);

        $validatedData['slug'] = SlugService::createSlug(Pemain::class, 'slug', $validatedData['nama']);

        if ($request->file('photo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('images', 'public');
        }

        Pemain::where('id', $pemain->id)->update($validatedData);

        Alert::success('Berhasil', 'Pemain telah di update');

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
