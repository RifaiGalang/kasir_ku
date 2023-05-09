<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function __construct()
   {
    // $this->middleware('guest:user',['except'=>'logout']);
   }
    public function formlogin()
    {
    // return view('login');
    }
    public function login(Request $request)
    {
        // $credentials = $request->validate([
        //     'email'=> 'required|email|exist:users',
        //     'password'=> 'required',
        // ]);
        // if(Auth::guard('user')->attempt($credentials, $request->remember))
        // {
        //     $request->session()->regenerate();
        //     return redirect()->intended(config('user.prefix'));
        // }
        // return back()->withErrors([
        //     'email'=> 'the provided credentials do not match our records ',
        // ]);

    }
    public function logout()
    {
        // Auth::guard('user')->logout();
        // return redirect()->route('user.login');
    }
}
