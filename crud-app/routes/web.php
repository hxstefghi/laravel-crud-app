<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::resource('user', User::class);

Route::view('/register', 'register')->name('register');
