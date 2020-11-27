<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Ukuran;
use App\Pesanan;
use App\User;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PesanController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index($id)
    {
        $ukurans = Ukuran::where('id_produk', $id)->take(10)->get();
        $datas = Produk::where('id_produk', $id)->first();
        return view('user.pesan.index', compact('datas','ukurans'));
    }

    public function pesan(Request $request, $id)
    {
        $datas = Produk::where('id_produk', $id)->first();
        $tanggal = Carbon::now();

        //simpan data pesanan ke database
        $pesanan = new Pesanan;

    }


}
