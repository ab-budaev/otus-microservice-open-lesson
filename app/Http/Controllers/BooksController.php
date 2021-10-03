<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BooksController extends Controller
{
    public function actionGetBooks(Request $request): View
    {
        $books = Book::query()->get();

        return view('books.index', ['books' => $books]);
    }
}
