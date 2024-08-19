<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\LigneCommande; 

class commandeController extends Controller
{
    public function commandePage(){
        return view('admin.commandes.liste');
    }

    public function store(Request $req){
        $commande=Commande::where('client_id' ,Auth::user()->id)->where('etat','en cours')->first();
        if($commande){
            $lc=new LigneCommande(); 
            $lc->qte=$req->qte; 
            $lc->product_id=$req->idProduct;
            $lc->commande_id=$commande->id;
            $lc->save(); 
            return redirect ('/listePanier')->with('success', 'success'); 
        
        }else{
            $commande= new Commande ();
            $commande->client_id = Auth::user()->id; 
            if ($commande->save()){
                $lc= new LigneCommande(); 
                $lc->qte=$req->qte; 
                $lc->product_id= $req->idProduct ; 
                $lc->commande_id=$req->$commande->id; 
                $lc->save(); 
                return redirect('/listePanier')->with('success', 'success'); 
            } else {
                return redirect ()->back()->with('error', 'error');
            }
        }
    }

  

    public function cartPage(){
        $user=Auth::user(); 
        $commande=Commande::where('client_id', Auth::user()->id)->where('etat','en cours')->first(); 
        $orderCount= $commande->ligneCommandes()->count(); 

        return view ('panier')->with('commande', $commande)->with('orderCount', $orderCount); 


    }

    public function listeCommandes()
    {
        $commandes = Commande::all();

        return view('admin.commandes.liste', ['commandes' => $commandes]);
    }


    
}
