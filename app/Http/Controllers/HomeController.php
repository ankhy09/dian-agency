<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Ukuran;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }
    public function katalog($id)
    {
        $ukurans = Ukuran::where('id_produk', $id)->take(10)->get();
        $datas = Produk::where('id_produk', $id)->first();
        $id = $id;
        return view('user.pesan.index', compact('datas','ukurans','id'));
    }
}
