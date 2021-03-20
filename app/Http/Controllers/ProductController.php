<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('product.products');
    }

    public function show($id){

        $product = new Product();
        $product->title = "the best product ever";
        $product->amount = 33.3;
        $product->quantity = 20;

        return view('product.show',['product'=>$product]);
    }

}
