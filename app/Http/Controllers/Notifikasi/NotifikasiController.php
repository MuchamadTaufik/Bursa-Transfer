<?php

namespace App\Http\Controllers\Notifikasi;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        return view('notifikasi.index', [
            'notifikasi' => Notifikasi::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
