<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use App\Models\student;

class FetchDataController extends Controller
{
    //

    function list()
    {
        // $studentData = student::all();
        
        $studentData = student::paginate(5);
        return view("pratice2.10-p", ["studentData" => $studentData]);
    }

    function delete(Request $request)
    {

        $id = $request->id;
        student::destroy($id);
        return redirect("/");
    }
    function add(Request $request)
    {


        $student = new student();
        $student->name =  $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        $student->save();

        return redirect("/");
    }

    function edit($id)
    {
        $student = student::find($id);
        return view("pratice2.11-p", ["student" => $student]);
    }

    function updateDetails(Request $request, $id)
    {
        student::where("id", $id)->update(
            [
                "name" => $request->name,
                "email" => $request->email,
                "batch" => $request->batch,
            ]
        );
        return redirect("/");
        
    }

    function searchById(Request $request)
    {
        $student = student::find($request->id);

        // return $student;
        if (!$student) {
            return "student not found with current id " . $request->id;
        } else
      
            return view("pratice2.10-p", ["studentFound" => $student]);
    }

    function deleteMultiple(Request $request){
        

         $result = student::destroy($request->ids);
        if( $result ){
            return redirect("/");
        }
        else{
            return "error while deleting";
        }

    }
}

