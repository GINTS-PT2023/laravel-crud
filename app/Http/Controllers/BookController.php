<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function show(string $id): View
    {
        return view('books.show', [
            'book' => Book::findOrFail($id)
        ]);
    }


    public function list()
    {
        $books = Book::all();
        return view('books.list', [
            'books' => $books
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255'
        ]);

        \App\Models\Book::create([
            'title' => $validated['title'],
            'content' => $validated['content']
        ]);
    }
}
