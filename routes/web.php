<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index')->name('index');
});

/* Login, Register, Reset */
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signup', [RegisterController::class, 'index'])->name('register');
