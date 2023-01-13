<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        $datas = Http::get('http://jsonplaceholder.typicode.com/posts');

        return view('mahasiswa')->with('datas', json_decode($datas, true));;
    }

    public function create()
    {
        return view('addmahasiswa');
    }

    public function store(Request $request)
    {

    }
}
