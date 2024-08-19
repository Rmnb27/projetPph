<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product ; 
use App\Models\Category ;

class dashboardClient extends Controller
{
    public function dashboardClientPage(){
        return view('dashboardClient');
    }

     //show all product
     public function allProduct(){
        $produits = Product::all();  //affiche tous les produits dans le dash client avec le boucle foreach  
        $categories = Category::all();    //affiche tous les categories dans le dash client avec le boucle foreach  
        //dd($produits);  
        
        return view('dashboardClient')->with(["produits" => $produits, "categories" => $categories]);

     }

     public function index($categoryId){
        $produits=Product::byCategory($categoryId)->get(); 
        $categories=Category::all();
        return view('dashboardClient')->with('produits', $produits)->with('categories', $categories);
    }

    public function filterByName(Request $request){
        $productName=$request->input('name'); 
        $produits=Product::where('name','like',"%$productName%")->get(); 
        $categories=Category::all(); 
        return view('dashboardClient')->with("produits", $produits)->with("categories", $categories); 
    }

    public function detailProduct($id_produit){          //return les details de produit par son id 
        $produit= Product::find($id_produit); 
        return view('detailsProduct', compact('produit'));
    }



}
