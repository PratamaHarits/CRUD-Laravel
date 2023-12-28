<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.loginForm');
    }

    public function loginProses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('fail', 'login gagal');
        }
    }

    public function register()
    {
        return view('auth.registerForm');
    }

    public function registerUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str::random(60),
        ]);
        return redirect()->route('login')->with('success', 'registrasi berhasil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
