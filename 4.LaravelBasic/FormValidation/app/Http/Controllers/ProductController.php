<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function create(Request $request){
        return view('product.store');
    }
    function store(Request $request){
        $validated =$request->validate([
            'name' => 'required|string|min:3|max:50',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:5.0|max:1000.0',
            'quantity' => 'required|numeric',
            'stock' => 'required|in:1,0'
        ]);
        // Product::create($request->all());
        Product::create($validated);
        return redirect()->back();
    }
}
