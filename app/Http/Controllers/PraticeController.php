<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Pest\Laravel\json;

class PraticeController extends Controller
{
    public function pratice()
    {
        return view("pratice.1-pratice");
    }

    public function addUser(Request $request)
    {
        $request->validate(
            [
                "name" => "required | min:3 | max:10 | unique:users | string",
                "email" => "required | email",
                "city" => "required | min:3 | max:10",
            ]);
            return "form subbmited successfully";
        }
        public function page3(){
            return view("pratice.3-pratice");
        }
     
};
