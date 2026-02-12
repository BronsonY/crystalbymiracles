<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'total_products' => Product::count(),
            'active_products' => Product::active()->count(),
            'featured_products' => Product::featured()->count(),
            'total_categories' => Category::count(),
            'total_collections' => Collection::count(),
            'total_customers' => User::where('role', 'customer')->count(),
            'low_stock_products' => Product::where('stock', '<=', 5)->count(),
        ];

        $recent_products = Product::with('category')->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_products'));
    }
}
