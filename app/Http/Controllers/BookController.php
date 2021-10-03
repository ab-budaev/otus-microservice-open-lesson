<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function actionGetBook(int $bookId): View
    {
        $book = Book::query()->findOrFail($bookId);

        $comments = [];

        return view('book.show', ['book' => $book, 'comments' => $comments]);
    }
}
