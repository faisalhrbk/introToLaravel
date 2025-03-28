<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("test", function () {
    return ["name" => "faisal hunzai"];
});

Route::get("student", [StudentController::class, "list"]);


Route::post("post", [StudentController::class, "postData"]);

Route::post("student", [StudentController::class, "addStudent"]);
Route::get("hi", [StudentController::class, "updateStudent"]);

Route::get("/hi", function(){
    return "hiii";
});