<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * route salam 
 * untuk membuat halaman salam dengan tampilan yang ditentukan
 */

Route::get('/salam', function() {
    return "Assalamu'alaikum STT NF, Selamat Belajar Laravel 11";
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);