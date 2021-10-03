<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

class BookController extends Controller
{
    public function actionGetBook(int $bookId): View
    {
        return view('book.show');
    }
}
