<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facade as Debugbar;

class CommandeController extends Controller
{
    public function index(){
        /*$commande = new Commande();
        $commande->status = "BLOCKED";
        $commande->reference = "ABC";
        $commande->save();

        $productsIds = [1,2,3];
        $commande->products()->attach($productsIds);
*/

    $commande = Commande::find(4);
    Debugbar::info($commande->products);
    return view('commandes.index',['products'=>$commande->products,'commande'=>$commande]);
    }
}
