<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    function create(Request $request){
        return view('product.store');
    }
    // function store(Request $request){
    //     $validated =$request->validate([
    //         'name' => 'required|string|min:3|max:50',
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric|min:5.0|max:1000.0',
    //         'quantity' => 'required|numeric',
    //         'stock' => 'required|in:1,0'
    //     ],[
    //         'name.min'=>'Product er nam minimum 3 okkhorer hote hobe  ',
    //         'name.max'=>'Product er nam maximum 50 okkhorer hote hobe',
            

    //     ]);
    //     // Product::create($request->all());
    //     Product::create($validated);
    //     return redirect()->back()->with("Success","Product created successfully!");
    // }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile("product_image")){
            $imagePath = $request->file("product_image")->store("product_images","public");
            $validated['product_image'] = $imagePath;
        }
        Product::create($validated);
        return redirect()->back()->with("Success", "Product created successfully!");

    }
}

// Thin Controller Fat Model ;
