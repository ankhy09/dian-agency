<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Ukuran;

class PagesController extends Controller
{
    public function home()
    {
        $datas = Produk::orderBy('id_produk', 'DESC')->paginate(10);
        return view('user.home', compact('datas'));
    }

    public function pemesanan()
    {
        return view ('user.pemesanan');
    }
    public function contact()
    {
        return view ('user.contact');
    }

    public function login()
    {
        return view ('user.login');
    }

    public function pemesananspanduk()
    {
        $datas = Ukuran::where('id_produk', '=', '8')->take(10)->get();
        return view('user.spanduk', compact('datas'));
    }

    public function pemesananxbanner()
    {
        return view ('user.xbanner');
    }

    public function pemesananposter()
    {
        return view ('user.poster');
    }

    public function pemesananpin()
    {
        return view ('user.pin');
    }

    public function cart()
    {
        return view ('user.cart');
    }

    
}
