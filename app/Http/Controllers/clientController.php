<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category ;
use App\Models\Product ;
use App\Models\User ;

class clientController extends Controller
{
    public function clientPage(){
        return view('admin.clients.liste');
    }

    
    
    public function listeClients()
    {
        $clients = user::all();

        return view('admin.clients.liste', ['clients' => $clients]);
    }
}
