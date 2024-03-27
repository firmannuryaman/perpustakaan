<?php

namespace App\Http\Controllers;

use App\Models\Kategoribukurelasi;
use \App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        $kategori = Kategoribukurelasi::all();
        return view('buku.buku', compact('buku', 'kategori'));
    }
}
