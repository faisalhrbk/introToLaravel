<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\DisplayFilesController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DeviceController;


use function Pest\Laravel\delete;

// Route::get("/", [DbController::class, "Users"]);

// Route::get("students", [DbController::class, "getStudents"]);

// Route::get("http", [HttpController::class, "httpClient"]);

// Route::get("query", [DbController::class, "eloquent"]);



// Route::get("form", function (){
//     return view("pratice.7-pratice");
// })->name("form");
// Route::post("login", [HttpController::class, "routeMethods"])->name("login");

// Route::view("profile", "pratice.3-pratice")->name("profile");



// flash session 

// Route::view("/", "pratice.3-pratice");

// Route::post("flash", [HttpController::class, "flashSession"])->name("flash");


//  display files in laravel

// Route::view("upload", "pratice.9-p");

// Route ::post("upload", [DisplayFilesController::class, "upload"])->name("upload");

// Route::get("/", [FetchDataController::class, "list"]);
// Route::post("update/{id}", [FetchDataController::class, "updateDetails"])->name('update');

// Route::get("delete/{id}", [FetchDataController::class, "delete"])->name("delete");
// Route::post("add", [FetchDataController::class, "add"])->name("add");

// Route::get("edit/{id}", [FetchDataController::class, "edit"])->name("edit");

// Route::get("search", [FetchDataController::class, "searchById"])->name('search');


// Route::post("delet-multi", [FetchDataController::class, "deleteMultiple"])->name("delete");


// upload images 

// Route::view("/", "pratice2.12-p");


// Route::post("upload", [ImageController::class, "upload"])->name("view");

// Route::get("list", [ImageController::class, "list"])->name("list");


// LAYOUT WIHT COMPONENT


// Route::view("/", "pratice2.13about");
// Route::view("/home", "pratice2.13home");



// Route::get("/", [DbController::class, "list"]);

// Route::get("/", [DbController::class, "save"]);



//  ONE TO ONE RELATIONSHIPS AND MORE
// Route::view("/", "15seller");

// Route::get("list", [SellerController::class, "list"])->name("list");
// Route::get("list", [SellerController::class, "manyList"])->name("list");

// Route::get("list", [SellerController::class, "manyToOne"]);



// Route::get("/device/{key:name}", [DeviceController::class, "index"]);


Route::get("/hi", function(){
    echo "hellow wrod";
});

