<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SiteSetting;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_featured', true)->limit(10)->get();
        $categories = Category::all();
        $setting = SiteSetting::current();

        return view('home', compact('featuredProducts', 'categories', 'setting'));
    }
}
