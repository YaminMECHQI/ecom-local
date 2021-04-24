<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facade as Debugbar;

class CommandeController extends Controller
{
    public function index(){
        $commandes = Commande::all();
        return view('commandes.index',['commandes'=>$commandes]);

        /*$commande = new Commande();
        $commande->status = "BLOCKED";
        $commande->reference = "ABC";
        $commande->save();

        $productsIds = [1,2,3];
        $commande->products()->attach($productsIds);


    $commande = Commande::find(4);
    Debugbar::info($commande->products);
    return view('commandes.index',['products'=>$commande->products,'commande'=>$commande]);*/
    }

    public function create(){
        $products = Product::all();
        return view('commandes.create',['products'=>$products]);
    }

    public function store(Request $request){

        $commande = new Commande();
        $commande->status = "PENDING";
        $commande->reference = Str::random(10);
        $commande->save();

        $productsIds = $request->input('product');
        $commande->products()->attach($productsIds);

    }

    public function show($id){
        $commande = Commande::findOrFail($id);
        return view('commandes.show',['commande'=>$commande]);
    }
}
