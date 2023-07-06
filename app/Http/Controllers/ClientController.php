<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function accueil(){
        return view('client.accueil');
    }

    public function categories(){
        return view('client.categories');
    }

    public function produits(){
        return view('client.produits');
    }

    public function contact(){
        return view('client.contact');
    }
    public function panier(){
        return view('client.panier');
    }
    
    public function login(){
        return view('client.login');
    }
}
