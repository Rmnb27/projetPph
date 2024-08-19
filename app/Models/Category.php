<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Product; 

class Category extends Model
{
    protected $table= 'categories';    //"protected" restreint l'accès aux parties internes de d'une classe
    protected $fillable =[             //"$fillable" contrôle quels champs peuvent être remplis massivement 
        'name',
        'description',
    ];

    
    public function products(){
        return $this->hasMany(Product::class);    // une categorie contient plusieurs produits 
    }
    
}
