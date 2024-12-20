<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // search ,category filter for home page
        // ['category'=>request('category'),'search'=> request('search')] <- request(['category',['search'])
        $products = Product::filter(request(['category','search']))->paginate(12);
        $categories = Category::all();
        return view('home', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function detail(Product $product)
    {
        $latestProducts = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('productDetail', [
            'product' => $product,
            'latestProducts' => $latestProducts
        ]);
    }
}
