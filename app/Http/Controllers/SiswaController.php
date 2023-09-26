<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa(request $request)
    $ol = new siswa();
    $cek = request-> validate ({
        'nisn'=>$request->nisn,
        'nama'=>$request->nama,
        'alamat'=>$request->alamat,
        'no_telp'=>$request->no_telp,
        'kode_kelas'=>$request->kode_kelas,
    });
}