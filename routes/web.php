<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BooksController::class, 'actionGetBooks']);
Route::get('/book/{bookId}', [BookController::class, 'actionGetBook']);