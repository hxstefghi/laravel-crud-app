<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

// authentication
Route::post('/login', [AuthController::class, 'login'])->name('login-auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('user', UserController::class);

Route::view('/register', 'register')->name('register');
