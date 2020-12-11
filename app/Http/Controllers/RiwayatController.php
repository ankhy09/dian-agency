<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Ukuran;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Auth;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesanans = Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status', '!=',0)->get();
    	return view('user.riwayat.index', compact('pesanans'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id_pesanan', $id)->first();
        $pesanan_detail = PesananDetail::where('id_pesanan', $pesanan->id_pesanan)->get();

     	return view('user.riwayat.detail', compact('pesanan','pesanan_detail'));
    }
    
}
