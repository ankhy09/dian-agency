<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Ukuran;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $ukurans = Ukuran::where('id_produk', $id)->take(10)->get();
        $datas = Produk::where('id_produk', $id)->first();
        return view('user.pesan.index', compact('datas','ukurans'));
    }

    

    public function pesan(Request $request, $id)
    {
        $ukurans = Ukuran::where('id_ukuran', $id)->first();
        $tanggal = Carbon::now();

        //simpan data pesanan ke database
        $pesanan = new Pesanan;
        $pesanan->id_pelanggan = Auth::user()->id_pelanggan;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->total_harga = 0;
        $pesanan->save();

        
        //simpan data pesanan ke database
        $pesanan_baru = Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status', 0)->first();

        $pesanan_detail = new PesananDetail;
        $pesanan_detail->nama_project = $request->nama;
        $pesanan_detail->id_ukuran = $ukurans->id_ukuran;
        $pesanan_detail->id_pesanan = $pesanan_baru->id_pesanan;
        $pesanan_detail->qty = $request->jumlah;
        $pesanan_detail->file = $request->filecetak;
        $pesanan_detail->jumlah_harga = $ukurans->harga*$request->jumlah;
        $pesanan_detail->save();


        //update total harga
        return redirect('home')->with('flash_message', 'Pesanan berhasil ditambahkan ke dalam Cart!');
        

    }


}
