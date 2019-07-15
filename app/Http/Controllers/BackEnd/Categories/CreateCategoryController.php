<?php

namespace App\Http\Controllers\BackEnd\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Illuminate\Support\Facades\Storage;

class CreateCategoryController extends Controller
{
    public function getFormCategory()
    {
        $category = new Category();
        return view('backend.pages.categories.create', compact('category'));
    }
    public function createCategory(CategoryRequest $request)
    {
        $validated = $request->validated();
        $name = $request->name;
        if ($request->hasFile('images')) {
            // Storage::delete('public/' . $path);
            $path = Storage::disk('public')->put('category/image', $request->file('images'));
        }
        if ($validated) {
            Category::create([
                'name' => $name,
                'images' => $path,
            ]);
            return redirect('admin/category');
        };
    }
}
