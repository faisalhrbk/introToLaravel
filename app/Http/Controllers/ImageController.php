<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //

    function upload(Request $request) {

        $path = $request->file(("file"))->store("public");
        
        $pathArr = explode("/", $path);
        $fileName = $pathArr[1];
        $img = new Image();
        $img->path = $fileName;
        if($img->save()) {
            return redirect('list');
        } else{
            return"error";
        }
    }

    function list(){

        $images = Image::all();
        return view("pratice2.12-p", ["images" => $images]);
    }
}
