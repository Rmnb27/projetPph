<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function productPage(){
        return view('admin.produits.liste');
    }

    //ajouter un produit
    public function addProduct(Request $request){   //Request: récupère les données de la requête HTTP.
        $p = new Product();
        $p->name = $request->name;
        $p->description = $request->description; 
        $p->qte = $request->qte; 
        $p->price = $request->price;  
        //upload image 
        $newname= uniqid();    //donne un id unique a une image basé sur l'horodatage
        $image=$request->file('image'); //Récupération de l'image depuis la requête HTTP 
        $newname.= "." . $image->getClientOriginalExtension(); //Ajout de l'extension au nom de l'image 
        $destinationPath= 'uploads'; //Définition du répertoire de destination 
        $image->move($destinationPath,$newname); //Déplacement de l'image vers le répertoire de destination
        $p->image = $newname;
        
        $p->category_id = $request->category_id ; 
        //tester
        if($p->save()){
            return redirect()->route('allProduct')->with('success', 'produit ajoutée avec succès.');
        }else{
            return "erreur d\'ajout";
        }
        } 


        //show all product
        public function allProduct(){
            $produits = Product::all();  
            $categories = Category::all();    //les categories bech yodhhrou fel modal mtaa l ajout produit bech ne5tarou l categorie mte3ou 
            //dd($produits);  
            return view('admin.produits.liste')->with(["produits" => $produits, "categories" => $categories]);   //$produits bech yet7at fi boucle bech n'affichiw les categories eli 3anna fel bd 
}


        //edit 
        public function update(Request $request){
            $id = $request->id; 
            $produit = Product::find($id);
            $produit->name = $request->name ;
            $produit->description = $request->description ;
            $produit->price = $request->price ; 
            $produit->qte = $request->qte ; 

            if ($produit->update()){
                return redirect()->back();
        
            }else{
                return "erreur";
            }
        }

        //supprimer un produit
    public function delete(Request $req){
        $produit=Product::find($req->id);   
        $produit->delete();
      return redirect()->route('allProduct');     
}


   



}
