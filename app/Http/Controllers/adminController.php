<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Commande;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboardPage(){
        $nbp = Product::all();
        $nb = count($nbp);
    
        $nbcat = Category::all();
        $nbc = count($nbcat);

        $nbclt= User::all();
        $nbcl=count($nbclt);

        $nbcommande= Commande::all();
        $nbcomm=count($nbcommande);
    
        return view('admin.dashboard', ['nb' => $nb, 'nbc' => $nbc , 'nbcl'=>$nbcl , 'nbcomm'=>$nbcomm]);
    }
    

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }



    
   /* public function editProfile(Request $req){
        Auth::user()->name = $req->name; 
        Auth::user()->email = $req->email; 

        if ($req->password){
            Auth::user()->password =Hash::make($req->password); 
        }
       // Auth::user()->update(); 
       // return redirect('/admin/profile')->with('success' , "admin modifié avec success"); 
       return view('admin/profile');


    } */

    public function updateProfile(Request $request)
{
    $admin = Auth::user();
    $admin->name = $request->name;
    $admin->email = $request->email;

    if ($request->filled('password')) {
        $admin->password = Hash::make($request->password);
    }

    $admin->save();

    return redirect('/profileAdmin')->with('success', 'Profile updated successfully');
}
   

  
    


}
