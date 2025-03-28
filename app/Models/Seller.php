<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';
//  one to one
    function  productData(){
        return $this->hasOne("App\Models\Product");
    }
//  one to many
    function productData2(){
        return $this->hasMany("App\Models\Product", "seller_id");
    }
//  many to one in prodcts model
}
