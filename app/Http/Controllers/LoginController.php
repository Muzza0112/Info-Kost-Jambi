<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postloginadmin(Request $request)
    {
        if (Auth::guard('user')->attempt($request->only('email', 'password'))) {
            return redirect('admin/dashadmin');
        } else {
            return redirect()->back()->withErrors(['login_error' => 'Invalid credentials.']);
        }
    }

    public function postlogin(Request $request)
    {
        if (Auth::guard('pengguna')->attempt($request->only('email', 'password'))) {
            return redirect('user/homepage');
        } else {
            return redirect()->back()->withErrors(['login_error' => 'Invalid credentials.']);
        }
    }
}
