<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //

    function  index(Device $key){

        // return $key;
        // return $key->all;
       echo $key->all();
    }
}
