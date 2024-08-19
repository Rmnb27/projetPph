<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class registerController extends Controller
{
    public function registerPage(){
        return view('authentification.register');
    }

    public function registerPost(Request $request){
        $user= new User();  //importer lel model eli aamaltou eli esmou User 
        $user->name = $request->nom; // name loula mta3 l bd w name lekhra mta3 l formulaire 
       
        $user->email =$request->email;
        $user->password =  Hash::make($request->password); 
       
        

        $user->save();
        return back()->with('success' , 'Inscription accomplie avec succès'); //success est un name 

        

    }
}
