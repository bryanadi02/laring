<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mengarahkan pengguna setelah login
    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('dashboard'); // Ganti 'dashboard' sesuai kebutuhan
    }

    // Logout dan redirect setelahnya
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login'); // Ganti '/login' sesuai kebutuhan
    }

    // Tambahkan metode login di sini
}
