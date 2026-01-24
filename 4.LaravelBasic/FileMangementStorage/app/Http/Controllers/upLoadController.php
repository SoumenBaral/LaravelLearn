<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upLoadController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function handleUpload(Request $request){
        // $request->validate([
        //     'file'=>'required|file|max:2048'
        // ]);

        // $path = $request->file('file')->store('uploads');

        // return back()->with('success', 'File uploaded successfully! Path: ' . $path);
        $file=$request->file('file');
        $name = $file->getClientOriginalName();
        // $extension = $file->getClientOriginalExtension();
        $newName = time().'_'.$name;
        $UploadPath = $file->storeAs('uploads', $newName);
        dd($UploadPath);
        // return back()->with('success', 'File uploaded successfully! Name: ' . $name);
    }
}
