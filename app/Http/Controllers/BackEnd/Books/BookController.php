<?php

namespace App\Http\Controllers\BackEnd\Books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $books = Book::paginate(5);
        return view('backend.pages.books.index', compact('books'));
    }
}
