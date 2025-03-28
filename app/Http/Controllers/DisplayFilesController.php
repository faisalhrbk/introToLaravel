<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayFilesController extends Controller
{
    //

    function upload(Request $request)
    {
        // $path = $request->file("file")->store("public");

        $path = $request->file("file")->storeAs("public", "file.jpg");

        $fileNameArray=explode("/", $path);
        $fileName=$fileNameArray[1];

        return view("pratice.7-pratice", ["fileName" => $fileName]);
    }
}
