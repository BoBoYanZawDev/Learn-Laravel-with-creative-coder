<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index() {
        return view('admin.index' , [
            'products'=> Product::orderBy('created_at' , 'desc')->paginate(10)
        ]);
    }
    public function create() {
           return view('admin.productCreate' ,[
             'categories'=> Category::orderBy('created_at' , 'desc')->get()
           ] );
    }
    public function createProduct() {
            $product = new Product();
            $product->name = Request('name');
            $product->price = Request('price');
            $product->description = Request('description');
            $product->save();
            return redirect('/admin/products');
    }
    public function delete(Product $product) {
        $product->delete();
        return redirect('/admin/products');
    }
}
