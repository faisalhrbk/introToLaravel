<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\student;



class StudentController extends Controller
{
  // function list()
  // {

  //   return student::all();
  // }
  // function postData(Request $req)
  // {
  //   return $req->input();
  // }

  // function addStudent(Request $req)
  // {

  //   $std = new student();

  //   $std->name = $req->name;
  //   $std->email = $req->email;
  //   $std->batch = $req->batch;
  //   if ($std->save()) {
  //     echo "studnets added to databasds";
  //     return $std;
  //   }
  // }
  function updateStudent()
  {
    return "update ";
    $std = student::find($req->id);
    if ($std) {

      $std->name = $req->name;
      $std->email = $req->email;
      $std->batch = $req->batch;

      return "updated sussessfully";
    }
  }
}
