<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins; // Import trait ThrottlesLogins

class AuthController extends Controller
{
    // Gunakan trait untuk throttling
    use ThrottlesLogins;

    // Tentukan field yang digunakan untuk username (untuk throttling)
    public function username()
    {
        return 'email';
    }

    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login'); // nanti pakai template Metronic
    }

    // Proses login dengan keamanan tambahan
    public function login(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Cek apakah pengguna sudah terlalu banyak mencoba login
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $credentials = $request->only('email', 'password');

        // 3. Coba autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika berhasil, reset percobaan login dan regenerasi session
            $this->clearLoginAttempts($request);
            $request->session()->regenerate();

            // Redirect berdasarkan role
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/user/dashboard');
            }
        }

        // 4. Jika gagal, catat percobaan login
        $this->incrementLoginAttempts($request);

        // Kembali dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->withInput($request->only('email'));
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
