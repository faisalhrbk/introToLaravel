<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{


    // function list()
    // {


    //     // $seller = new Seller();
    //     // $seller->name = "aru ";
    //     // $seller->email = "74Q23239I@example.com";
    //     // if($seller->save()) echo $seller->all();

    //     $product = new Product();
    //     $product->name = "benz ";
    //     $product->price = 10000;
    //     $product->seller_id = 2;
    //     if ($product->save()) echo $product->all();


    //     $seller = Seller::find(1)->productData;
    //     return $seller;
    // }

    //   ONE TO MANY RELATIONSHIP
    // function manyList(){
    //     return Seller::find(3)->productData2;
    // }



    //  MANY TO ONE RELATIONSHIP
    
    function manyToOne() {
        $data = Product::with("productData3")->get();
        return $data;
    }
}
