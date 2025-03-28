<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function getUser()
    {
        return "this is a controller";
    }

    function getAbout()
    {
        return "this is about page";
    }

    function getName($name)
    {
        if ($name == "faisal") {
            return "this is name page " . $name;
        };
    }

    function getUserPage()
    {
        return view("user");
    }
}
