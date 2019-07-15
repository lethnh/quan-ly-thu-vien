<?php

namespace App\Http\Controllers\BackEnd\Books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class DeleteBookController extends Controller
{
    public function deleteBook(Book $book)
    {
        if (isset($book)) {
            $book->delete();
            return redirect('admin/book')->with('success', 'Book has been deleted');
        }
    }
}
