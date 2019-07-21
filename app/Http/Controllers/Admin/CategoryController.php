<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    }

    public function edit(Category $category)
    {
        echo json_encode($category);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }
}
