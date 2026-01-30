<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upLoadController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function handleUpload(Request $request){
        $request->validate([
            // 'file'=>['nullable','image','max:2048','mimes:jpeg,png,jpg,gif'] // max size in KB
            'file'=>['required'] // max size in KB
        ]);
        // if($request->hasFile('file')){
            // $path = $request->file('file')->store('uploads');

        // return back()->with('success', 'File uploaded successfully! Path: ' . $path);
        // $file=$request->file('file');
        // $name = $file->getClientOriginalName();
        // $extension = $file->getClientOriginalExtension();
        // $newName = time().'_'.$name;
        // $UploadPath = $file->storeAs('uploads', $newName,['disk'=>'local']);
        // dd($UploadPath);
        // return back()->with('success', 'File uploaded successfully! Name: ' . $name);
        // }
        // dd('No file uploaded');

        if (request()->hasFile('file')){
            $files = request()->file('file');
            foreach($files as $file){
                $file->store('uploads');
            }
            dd('Files uploaded successfully');

        }
        dd('No file uploaded');
        
    }
}
