<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function commandes(){
        return $this->belongsToMany(Commande::class,'products_commandes');
    }
}
