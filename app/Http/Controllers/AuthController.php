<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Memproses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            // Mencegah session fixation
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // Jika gagal: kembali ke form dengan pesan umum
        return back()->withErrors([
            'error' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    // Menampilkan dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

    // Memproses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}