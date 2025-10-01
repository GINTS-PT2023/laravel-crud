<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{

    public function show(string $id): View
    {
        return view('books.show', [
            'book' => Book::findOrFail($id)
        ]);
    }
}
