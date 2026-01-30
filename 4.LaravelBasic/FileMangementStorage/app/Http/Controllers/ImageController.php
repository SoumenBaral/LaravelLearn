<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
class ImageController extends Controller
{
    public function gallery(){
        return view('gallery');
    }
    public function store(Request $request){
        $request->validate([
            'image'=>['required','image','max:2048','mimes:jpeg,png,jpg,gif'] // max size in KB
        ]);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name = $file->getClientOriginalName();
            $path = $file->storeAs('images', $name,['disk'=>'public']);

            // Save image info to database
            image::create([
                'name' => $name,
                'file_path' => $path,
            ]);

            return back()->with('success', 'Image uploaded successfully! Name: ' . $name);
        }
        return back()->with('error', 'No image uploaded');
    }
}
