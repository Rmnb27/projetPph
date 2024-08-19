<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function afficherPage()  {
        $nom="rimene"; 
        $age="20";
        $names=["asma","nihed","maha"];
        return view('test')->with("var",$nom)->with("age",$age)->with("names",$names);  //"var" houwa name lel nom bech baaed n3aytolou b name mte3ou fel page test kima haka {{"var"  }}
        
    }
    
}
