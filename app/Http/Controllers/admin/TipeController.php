<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipe;
use App\Produk;

class TipeController extends Controller
{
    public function index() {
        

        $datas = Tipe::orderBy('id_tipe', 'DESC')->paginate(10);
        return view('admin.tipe.index', compact('datas', 'produk'));
    }

    public function create()
    {
        $produk = Produk::all();
        return view('admin.tipe.create', compact ('produk'));
    }

}
