<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('index');
});

/* Login, Register, Reset */

/* Only accessable by guests */
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/signup', [RegisterController::class, 'index'])->name('register');

});

/* When login/auth is created. Activate this middleware */
// Route::middleware(['auth'])->group(function () {
    Route::get('/viewRecipe/{drinkId}', [RecipeController::class, 'index'])->name('recipe');
// });
