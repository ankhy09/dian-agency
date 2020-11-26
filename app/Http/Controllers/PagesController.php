<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Ukuran;

class PagesController extends Controller
{
    public function home()
    {
        $datas = Produk::orderBy('id_produk', 'DESC')->paginate(4);
        return view('user.home', compact('datas'));
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
        $desc = Produk::where('id_produk', '=', '8')->first();
        return view('user.spanduk', compact('datas','desc'));
    }

    public function pemesananxbanner()
    {
        $datas = Ukuran::where('id_produk', '=', '9')->take(10)->get();
        $desc = Produk::where('id_produk', '=', '9')->first();
        return view('user.xbanner', compact('datas','desc'));
    }


    public function pemesananposter()
    {
        $datas = Ukuran::where('id_produk', '=', '10')->take(10)->get();
        $desc = Produk::where('id_produk', '=', '10')->first();
        return view('user.poster', compact('datas','desc'));
    }

    public function pemesananpin()
    {
        $datas = Ukuran::where('id_produk', '=', '11')->take(10)->get();
        $desc = Produk::where('id_produk', '=', '11')->first();
        return view('user.pin', compact('datas','desc'));
    }

    public function cart()
    {
        return view ('user.cart');
    }

    
}
