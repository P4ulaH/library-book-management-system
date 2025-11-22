<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::get('/test', function () {
    $books = Book::with(['author','genre'])->get();
    return view('testindex', compact('books'));
});

Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('genres', GenreController::class);
