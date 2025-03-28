<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    // many to one
    function productData3()
    {
        return $this->belongsTo("App\Models\Seller");
    }
}
