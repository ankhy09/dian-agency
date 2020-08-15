<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view ('user.home');
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

}
