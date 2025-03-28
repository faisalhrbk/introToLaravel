<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    //
    function httpClient()
    {
        $data =  Http::get("https://dummyjson.com/products");
        $data = $data->body();
        return view("pratice.6-http", ["data" => json_decode($data)]);
    }


    function routeMethods(Request $request)
    {
        // $email = $request->email;
        // $request->session()->put("email", $email);
        // echo $request->session()->get("email");

        //  uper wali 3nu line ki kagy 1 line
        session(["email" => $request->email]);

        // larvel http  class ,,, sessions
        // echo "ahh shit! here wo go again";
        // return redirect ("profile");
    }

    function flashSession(Request $request){

        // your db code
        session()->flash("message", "User has been added successfully");

      return redirect("/");
        
    }
}
