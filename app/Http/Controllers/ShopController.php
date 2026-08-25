<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->get();
        $categories = Category::all();

        return view('shop', compact('products', 'categories'));
    }
}
