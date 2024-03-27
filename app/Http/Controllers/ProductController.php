<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $product = new Product;
        $product->name = 'Payback 2';
        $product->price = 40;
        $product->save();

        $category = Category::find([3, 4]);
        $product->categories()->attach($category);
        return 'Success';
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
}
