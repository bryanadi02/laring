<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Redirect setelah login
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
