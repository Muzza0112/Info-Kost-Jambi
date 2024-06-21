<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homepageadmin()
    {
        return view('admin.homepageadmin');
    }

    public function dashadmin()
    {
        return view('admin.dashadmin');
    }

    public function pengelolakost()
    {
        return view('admin.pengelolakost');
    }

    public function tambahkost()
    {
        return view('admin.tambahkost');
    }

    public function editkost()
    {
        return view('admin.editkost');
    }

    public function daftarkostadmin()
    {
        return view('admin.daftarkostadmin');
    }

    public function tentangkamiadmin()
    {
        return view('admin.tentangkamiadmin');
    }

    public function detailkostadmin()
    {
        return view('admin.detailkostadmin');
    }
}
