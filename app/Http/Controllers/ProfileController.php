<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Hash;

class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id_pelanggan', Auth::user()->id_pelanggan)->first();

    	return view('user.profile', compact('user'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);
    
    	$user = User::where('id_pelanggan', Auth::user()->id_pelanggan)->first();
    	$user->nama = $request->nama;
    	$user->no_telp = $request->no_telp;
    	$user->email = $request->email;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();
    	return redirect('profile');
    }
}
