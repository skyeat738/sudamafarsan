<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'products' => Product::count(),
            'categories' => Category::count(),
            'in_stock' => Product::where('stock_status', 'in_stock')->count(),
            'out_of_stock' => Product::where('stock_status', 'out_of_stock')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
