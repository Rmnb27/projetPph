<?php

namespace App\Http\Controllers;

use App\Models\Category;   
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function categoryPage(){
        return view('admin.categories.liste');
    }

//ajouter une catégorie 
    public function addCategory(Request $request){   //Request: récupère les données de la requête HTTP.
    $c = new Category();
    $c->name = $request->name;
    $c->description = $request->description; 
    if($c->save()){
        return redirect()->route('category')->with('success', 'Catégorie ajoutée avec succès.');
    }else{
        return "erreur d\'ajout";
    }

    }   

//show all categ 
public function allCategory(){
    $category = Category::all();     //all tjib les categories eli aandi lkol fel bd 
    return view('admin.categories.liste')->with("category",$category) ;    //name category bech yet7at fi boucle if bech n'affichiw les categories eli 3anna fel bd 
}


//supprimer une categorie 
public function delete(Request $req){
    $category=Category::find($req->id);   // find tlawej selon id mta3 categorie 
    $category->delete();
    return redirect()->route('category');     //ifase5 w iraj3ek lel liste mtaa les categories   //name category mtaa l page liste 
}






//edit category 
public function edit (Request $req){     //rechercher id de categorie 
    $category=Category::find ($req->id);
    return view ('admin.categories.edit')->with ("category",$category);
}

public function update(Request $req) {
    $category = Category::find($req->id);
    $category->update([
        'name' =>$req->name,
        'description'=>$req->description
       
    ]);
    //return redirect()->back(); // back trajj3ek lel page eli enti kont deja feha 
    return redirect()->route('category')->with('success','categorie modifié');
    
}
}

