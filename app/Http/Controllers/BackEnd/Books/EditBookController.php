<?php

namespace App\Http\Controllers\BackEnd\Books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Http\Requests\BookRequest;
use App\Category;

class EditBookController extends Controller
{
    public function getFormEditBook(Book $book)
    {
        $categories = Category::all();
        return view('backend.pages.books.edit', compact(['book', 'categories']));
    }

    public function editBook(BookRequest $request, Book $book)
    {
        $validated = $request->validated();
        if ($validated) {
            $name = $request->name;
            $author = $request->author;
            $price = $request->price;
            $amount = $request->amount;
            $isbn = $request->isbn;
            $category_id = $request->category;
            $book->update([
                'name' => $name,
                'author' => $author,
                'price' => $price,
                'amount' => $amount,
                'category_id' => $category_id,
            ]);
            return redirect('admin/book/edit/' . $book->id)->with('success', 'User has been created');
        }
    }
}
