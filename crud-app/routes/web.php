<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::resource('user', UserController::class);

Route::view('/register', 'register')->name('register');
