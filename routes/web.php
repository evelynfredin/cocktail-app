<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FavoritesController;

Route::get('/', [HomeController::class, 'index'])->name('index');






/* Only accessable by guests */
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/signup', [RegisterController::class, 'index'])->name('register');

    /* Login, Register, Reset */
    Route::post('/login', [LoginController::class, 'store']);
    Route::post('/signup', [RegisterController::class, 'store'])->name('signup');
});

/* When login/auth is created. Activate this middleware */
Route::middleware(['auth'])->group(function () {
    Route::get('/viewRecipe/{drinkId}', [RecipeController::class, 'index'])->name('recipe');
    Route::get('/logout', [LogoutController::class, 'logout']);

    /* User specifics */
    Route::get('/profile', [FavoritesController::class, 'index'])->name('profile');
    Route::put('/editprofile/{user:id}', [UserController::class, 'update'])->name('update');
    Route::post('/addfavorite/{drinkId}', [FavoritesController::class, 'storeFavorite'])->name('addfavorite');
    Route::delete('/deletefavorite/{drinkId}', [FavoritesController::class, 'destroy'])->name('deletefavorite');
});
