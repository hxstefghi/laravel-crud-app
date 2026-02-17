<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/home', [PostController::class, 'index'])->middleware('auth')
    ->name('home');

// authentication
Route::post('/login', [AuthController::class, 'login'])->name('login-auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// user resource
Route::resource('user', UserController::class);

// post resource
Route::resource('post', PostController::class);


Route::view('/register', 'register')->name('register');
