<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Ukuran;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;




class PesanController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $ukurans = Ukuran::where('id_produk', $id)->take(10)->get();
        // $datas = Produk::where('id_produk', $id)->first();
        // return view('user.pesan.index', compact('datas','ukurans'));
    }


    

    public function pesan(Request $request, $id)
    {
        $ukurans = Ukuran::where('id_produk', '==', $id);
        $tanggal = Carbon::now();

        //cek validasi
    	$cek_pesanan = Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status', 0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
        //simpan data pesanan ke database
        $pesanan = new Pesanan;
        $pesanan->id_pelanggan = Auth::user()->id_pelanggan;
        $pesanan->tanggal = $tanggal;
        $pesanan->kode = mt_rand(100, 999);
        $pesanan->status = 0;
        $pesanan->total_harga = 0;
        $pesanan->save();
        }

        
        //simpan data pesanan ke database
        $pesanan_baru = Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status', 0)->first();

        $this->validate($request, [
            'filecetak'         => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'jumlah'            => 'required|integer',
        ]);

        $pesanan_detail = new PesananDetail;
        $pesanan_detail->nama_project = $request->nama;
        $pesanan_detail->id_ukuran = $request->ukuran;
        $pesanan_detail->id_pesanan = $pesanan_baru->id_pesanan;
        $pesanan_detail->qty = $request->jumlah;
        // $pesanan_detail->file = $request->filecetak;
        $image = $request->file('filecetak');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/pesanan'), $new_name);
        $pesanan_detail->file =  $new_name;
        $idUkuran = $pesanan_detail->id_ukuran;
        $ukurans = Ukuran::where('id_ukuran', $idUkuran)->first();
        $pesanan_detail->jumlah_harga = $ukurans->harga*$request->jumlah;
        $pesanan_detail->save();

        
        
    	//hitung total harga
    	$pesanan = Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status', 0)->first();
    	$pesanan->total_harga = $pesanan->total_harga+$ukurans->harga*$request->jumlah;
    	$pesanan->update();
        
        Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
    	return redirect('checkout');
        

    }

    
    //menampilkan data chackout pelanggan
    public function checkout()
    {
        $pesanan = Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status', 0)->first();
        $pesanan_detail = [];
        if(!empty($pesanan))
        {
            $pesanan_detail = PesananDetail::where('id_pesanan', $pesanan->id_pesanan)->get();
        }
        return view('user.pesan.checkout', compact('pesanan','pesanan_detail'));
    }

    
    public function delete($id)
    {
     
        $pesanan_detail = PesananDetail::where('id_pesanandetail', $id)->first();
        $pesanan = Pesanan::where('id_pesanan', $pesanan_detail->id_pesanan)->first();
        $pesanan->total_harga = $pesanan->total_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();

        return redirect()->to('checkout')->with('flash_message', 'pesanan terhapus!');
    }

    public function konfirmasi()
    {
        $pesanan = Pesanan::where('id_pelanggan', Auth::user()->id_pelanggan)->where('status', 0)->first();
        $pesanan_id = $pesanan->id_pesanan;
        $pesanan->status = 1;
        $pesanan->update();
        

        return redirect()->to('riwayat/'.$pesanan_id);
    }

   
    }
