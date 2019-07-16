<?php

namespace App\Http\Controllers\BackEnd\Books;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;

class CreateBookController extends Controller
{
    public function getFormBook()
    {
        $book = new Book();
        $categories = Category::all();
        return view('backend.pages.books.create', compact(['book', 'categories']));
    }

    public function createBook(BookRequest $request)
    {
        $validated = $request->validated();
        if ($validated) {
            if ($request->hasFile('images')) {
                // Storage::delete('public/' . $path);
                $path = Storage::disk('public')->put('book/image', $request->file('images'));
            }
            Book::create([
                'name' => $request->name,
                'author' => $request->author,
                'price' => $request->price,
                'amount' => $request->amount,
                'category_id' => $request->category,
                'isbn' => $request->isbn,
                'images' => $request->path,
            ]);
            return redirect('admin/book')->with('success', 'Book has been created');
        }
    }
}
