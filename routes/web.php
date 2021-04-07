<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

/* Login, Register, Reset */
Route::post('/login', [RegisterController::class, 'store'])->name('signup');

/* Only accessable by guests */
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/signup', [RegisterController::class, 'index'])->name('register');
});


// Route::get('/search', [RegisterController::class, 'index'])->name('register');
