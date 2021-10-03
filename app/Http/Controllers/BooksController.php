<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BooksController extends Controller
{
    public function actionGetBooks(Request $request): View
    {
        return view('books.index');
    }
}
