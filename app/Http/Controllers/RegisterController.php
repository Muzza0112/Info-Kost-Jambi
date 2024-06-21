<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Log request data
        Log::info('Request data: ', $request->all());

        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pengguna',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Log after validation
        Log::info('Validation passed.');

        // Buat pengguna baru
        $pengguna = Pengguna::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log user creation
        Log::info('User created: ', ['pengguna' => $pengguna]);

        // Redirect setelah pendaftaran berhasil
        return redirect('/login')->with('success', 'Pendaftaran berhasil, silakan login.');
    }
}
