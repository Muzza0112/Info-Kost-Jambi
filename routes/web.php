<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KostController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk login user
Route::get('/login', function () {
    return view('loginuser');
});

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/daftar', function () {
    return view('daftar');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Rute untuk login admin
Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::post('/postloginadmin', [LoginController::class, 'postloginadmin'])->name('postloginadmin');

// Rute untuk halaman user
Route::get('/user/daftarkost', [KostController::class, 'daftarkost']);
Route::get('/user/homepage/', [KostController::class, 'homepage']);
Route::get('/user/tentangkami', [UserController::class, 'tentangkami']);
Route::get('/user/detailkost/{id}', [KostController::class, 'detailkost'])->name('detailkost');

// Rute untuk halaman admin (memerlukan autentikasi)
Route::get('/admin/pengelolakost', [KostController::class, 'pengelolakost']);
Route::get('/admin/tambahkost', [KostController::class, 'tambahkost']);
Route::post('/insertdata', [KostController::class, 'insertdata']);
Route::get('/admin/editkost/{id}', [KostController::class, 'editkost']);
Route::post('/admin/updatedata/{id}', [KostController::class, 'updatedata']);
Route::get('/delete/{id}', [KostController::class, 'delete']);

Route::group(['middleware' => ['auth:user']], function () {
    Route::get('/admin/homepageadmin', [AdminController::class, 'homepageadmin']);
    Route::get('/admin/dashadmin', [AdminController::class, 'dashadmin']);
    Route::get('/admin/daftarkostadmin', [AdminController::class, 'daftarkostadmin']);
    Route::get('/admin/tentangkamiadmin', [AdminController::class, 'tentangkamiadmin']);
    Route::get('/admin/detailkostadmin', [AdminController::class, 'detailkostadmin']);
});

