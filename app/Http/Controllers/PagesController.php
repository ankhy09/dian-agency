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
    
}
