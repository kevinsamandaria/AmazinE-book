<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //
    public function view()
    {
        return view('/login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

        if($request->remember){
            Cookie::queue('email', $credentials['email'], 120);
        }

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed!!!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
