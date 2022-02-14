<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function view()
    {
        $books = Book::simplePaginate(6);
        return view('/home', [
            'books'=>$books,
        ]);
    }

    public function detail($id)
    {
        $books = Book::find($id);
        return view('/detail', compact('books'));
    }
}
