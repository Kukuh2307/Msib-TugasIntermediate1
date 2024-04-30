<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('layout.login')->with([
            "judul" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        // @dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // @dd($request->session()->regenerate());
        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('/')->with([
                'judul' => 'Dashboard',
                'admin' => Auth::user()->name,
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
