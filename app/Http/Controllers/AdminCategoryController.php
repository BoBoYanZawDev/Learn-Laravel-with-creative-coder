<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.category', [
            'categories' => Category::latest()->paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.categorycreate');
    }
    public function edit(Category $category)
    {
        return view('admin.categoryedit', [
            'category' => $category
        ]);
    }

    // Update category
    public function update(CategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/categories');
    }
    //Create category
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/categories');
    }
    // Delete category
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect('/admin/categories');
        } catch (\Exception) {
            return redirect('/admin/categories')->with('error', 'Category cannot be deleted');
        }
    }
}
