<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function ProductCategory(Category $category){
            return view('home',[
                'categories' => Category::all(),
                'products' => $category->products()->paginate(12)
            ]);
    }
}
