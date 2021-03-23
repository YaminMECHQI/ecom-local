<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('product.products',['products'=>$products]);
    }

    public function show($id){

        /*$product = new Product();
        $product->title = "the best product ever";
        $product->amount = 33.3;
        $product->quantity = 20;*/

        $product = Product::find($id);
        return view('product.show',['product'=>$product]);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        
    }

}
