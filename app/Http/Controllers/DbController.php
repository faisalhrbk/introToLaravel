<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use App\Models\User;

class DbController extends Controller
{
    //

    function Users()
    {
        $users = DB::select('select * from users');


        return view("pratice.5-db", ["users" => $users]);
    }
    function getStudents()
    {

        $data = new \App\Models\student;
        echo $data->testFun();
        $students = \App\Models\student::all();
        return view("pratice.5-db", ["students" => $students]);
    }

    // query builder 
    function queries()
    {
        // DB::table('users')->insert([
        //     'name' => 'alex Doe',
        //     'email' => 'alex@example.com',
        //     'password' => ' New Dehli'
        // ]);

        // $users = \App\Models\User::select('name', 'email')->get();
        $result = DB::table("users")->where("name", "spiderman")->update([
            "password" => "mave"
        ]);
        if ($result) {
            echo "Password has been updated";
        } else {
            echo "Password update failed";
        }





        // $result = DB::table("users")->get();
        // echo $result;
        // return view("pratice.5-db", ["result" => $result]);
    }



    function praticeQueries()
    {
        // $result = \App\Models\User::all();
        // $result = \App\Models\User::where("email", "faisal.dev@pizza.com")->get();
        // $result = \App\Models\User::select("name", "email")->get();
        // $result = \App\Models\User::create([
        //     "name" => "spiderman",
        //     "email" => "spiderman@marvel.com",
        //     "password" => "mave"
        // ]);

        $result = null;
        return view("pratice.5-db", ["result" => $result]);
    }


    function eloquent()
    {

        // $users = User::find(3);
        // User::where('id', 5)->update(['name' => 'Spiderman']);
        // User::insert(['name' => 'Elon musk',
        //     'email' => 'elon@tesla.com',
        //     'password' => 'tesla'
        // ]);

        // User::where('id', 5)->update(['name' => 'Spiderman 2']);



        echo "hello";
    }


    // MUTATORS AND ACCRSSORS
    function list()
    {


        return User::all();
        // return view("pratice2.15");
    }

    function save()
    {

        $user = new User;
        $user->name = "patric";
        $user->email = "patric.dev@purple.com";
        $user->password = "batmaeen";

        if ($user->save()) {
            echo "added student";
        }
    }
};
