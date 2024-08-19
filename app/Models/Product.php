<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=['name' , 'description' , 'price' , 'qte' , 'image' , 'category_id'];   //category_id = foreign key 
    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function scopeByCategory($query, $categoryId){    //query scope taamel select products avec la condition categotyId 
        return $query->where('category_id', $categoryId); 

    }

    

    public function LigneCommande(){
        return $this->HasMany(LigneCommande::class, 'product_id' , 'id'); 

    }






    use HasFactory;
}
