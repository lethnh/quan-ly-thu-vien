<?php

namespace App\Http\Controllers\BackEnd\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::paginate(5);
        return view('backend.pages.categories.index', compact('categories'));
    }
}


