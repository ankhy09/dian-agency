<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class LoginController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

 

     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function showLoginForm(){
        return view('authAdmin.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    
    public function login (Request $request) {
        $this->validate($request, [
            'username' => 'required|',
            'password' => 'required|min:6'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($credential, $request->member)){
            return redirect()->intended(route('admin.home'));
        }

        return redirect()->back()->withInput($request->only('username','remember'));
    }

}
