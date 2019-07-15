<?php

namespace App\Http\Controllers\BackEnd\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\CategoryRequest;

class EditCategoryController extends Controller
{
    public function getFormCategory(Category $category)
    {
        return view('backend.pages.categories.edit', compact('category'));
    }

    public function editCategory(CategoryRequest $request, Category $category)
    {
        $validated = $request->validated();
        if ($validated) {
            $name = $request->name;
            $category->update([
                'name' => $name,
            ]);
            return redirect('admin/category/edit/' . $category->id)->with('success', 'User has been created');
        }
    }
}
