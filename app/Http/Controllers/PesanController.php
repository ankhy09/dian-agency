<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Ukuran;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $datas = Produk::where('id_produk', $id)->first();
        return view('user.pesan.index', compact('datas'));
    }




}
