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

        $product = Product::find($id);
        return view('product.show',['product'=>$product]);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        
        $request->validate([ 'title'=> 'required|min:4|max:10' ]);
        $request->validate([ 'amount'=> 'required' ]);
        $request->validate([ 'quantity'=> 'required' ]);

        $product = new Product();

        $product->title = $request->input('title');
        $product->amount = $request->input('amount');
        $product->quantity = $request->input('quantity');

        $product->save();

        $request->session()->flash('status', 'Task Add was successful!');

        return redirect('products');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('product.edit',['product'=>$product]);
    }

    public function update(Request $request,$id){
        
        $request->validate([ 'title'=> 'required|min:4|max:10' ]);
        $request->validate([ 'amount'=> 'required' ]);
        $request->validate([ 'quantity'=> 'required' ]);

        $product = Product::findOrFail($id);

        $product->title = $request->input('title');
        $product->amount = $request->input('amount');
        $product->quantity = $request->input('quantity');

        $product->update();

        $request->session()->flash('status', 'Task Update was successful!');

        return redirect('products');
    }
}
