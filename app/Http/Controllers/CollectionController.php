<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of collections.
     */
    public function index()
    {
        $collections = Collection::active()->withCount('products')->get();
        return view('collections.index', compact('collections'));
    }

    /**
     * Display the specified collection and its products.
     */
    public function show(Collection $collection)
    {
        $products = $collection->products()->active()->with('primaryImage')->paginate(12);
        return view('collections.show', compact('collection', 'products'));
    }
}
