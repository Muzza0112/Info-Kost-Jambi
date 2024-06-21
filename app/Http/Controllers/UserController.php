<?php

namespace App\Http\Controllers;
use App\Models\Kost;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage()
    {
        return view('user.homepage');
    }

    public function tentangkami()
    {
        return view('user.tentangkami');
    }

    
}
