<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\CommentsApiClient;
use Illuminate\View\View;

class BookController extends Controller
{
    public function actionGetBook(int $bookId, CommentsApiClient $commentsApiClient): View
    {
        $book = Book::query()->findOrFail($bookId);

        $comments = $commentsApiClient->getComments('book', $bookId);

        return view('book.show', ['book' => $book, 'comments' => $comments]);
    }
}
