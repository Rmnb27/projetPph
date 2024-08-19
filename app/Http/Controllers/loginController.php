<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;        //zedna hethi lel Auth 
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginPage(){
        return view('authentification.login');
    }




    public function loginPost(Request $request){
        $credetials=[
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)){
            return redirect('/home')->with('success' , 'login success');    //ken l email w psw s7a7 thezna toul l home 
        }
        return back()->with ('error' , 'le mail ou bien le mot de passe est incorrect '); 

    }



    
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    
}
