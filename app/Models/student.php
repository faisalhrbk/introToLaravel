<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
      public $timestamps = false;
    protected $table = "students";
    function testFun(){
        return "this is dummy function in students model";

    }
}
