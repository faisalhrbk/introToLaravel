<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function getAbout()
    {

        $fullname = "data is colledcted form database";

        $myArray = ["apple", "banana", "cherry"];

        return view('about', compact('fullname', 'myArray'));
    }

    public function pratice()
    {
        return view('subview.inner');
    }
}
