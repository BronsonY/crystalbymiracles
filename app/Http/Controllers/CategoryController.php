<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories.
     */
    public function index()
    {
        $categories = Category::active()->withCount('products')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Display the specified category and its products.
     */
    public function show(Category $category)
    {
        $products = $category->products()->active()->with('primaryImage')->paginate(12);
        return view('categories.show', compact('category', 'products'));
    }
}
