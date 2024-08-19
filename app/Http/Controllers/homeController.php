<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homePage(){
        return view('home');
    }

    public function __construct(){
        $this->middleware('auth'); 
    }

    public function index(){
        if (Auth::user()->role == "admin"){
            return redirect ('/dashboard');

        }else{
            //dd("error");
            return redirect ('/dashboardClient'); 
        }
    }
}
