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

    public function katalog($id)
    {
        $ukurans = Ukuran::where('id_produk', $id)->take(10)->get();
        $datas = Produk::where('id_produk', $id)->first();
        return view('user.pesan.index', compact('datas','ukurans'));
    }
    
}
