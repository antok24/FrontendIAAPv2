<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;

class MahasiswaController extends Controller
{
    public function index()
    {
        $datas = Http::get('http://localhost:3000/mahasiswa')->json();
        
        return view('mahasiswa', compact('datas'));
    }

    public function create()
    {
        return view('addmahasiswa');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'hp' => 'required',
        ]);

        $response = Http::post('http://localhost:3000/mahasiswa', [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'hp' => $request->hp
        ]);
        
        return redirect()->route('home')->with('status', 'data berhasil ditambahkan!');
    }
}
