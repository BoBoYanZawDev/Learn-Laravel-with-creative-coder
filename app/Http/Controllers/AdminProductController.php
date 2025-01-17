<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
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
             'categories'=> Category::latest()->get()
           ] );
    }
    public function edit(Product $product) {
           return view('admin.productedit' ,[
             'categories'=> Category::latest()->get(),
             'product'=> $product
           ] );
    }
    public function store(ProductRequest $request) {
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->description = $request->description; 
            $product->save();
            return redirect('/admin/products');
    }
    public function update(Product $product ,Request $request) {
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->save();
            return redirect('/admin/products');
    }
    public function destroy(Product $product) {
        $product->delete();
        return redirect('/admin/products');
    }
}
