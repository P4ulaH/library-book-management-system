<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthController;

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/', fn() => redirect('/login'));
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login', 'login');
    Route::get('/register', 'showRegister')->name('register');
    Route::post('/register', 'register');
});

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    Route::resource('authors', AuthorController::class);
    Route::resource('genres', GenreController::class);
});