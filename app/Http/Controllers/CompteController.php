<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil(){
		if (auth()->guest()){
			return redirect('/connexion')->withErrors([
			 'email' => "Connectez vous pour accéder à votre compte",
			]);
		}
		
		return view('compte');
	}

	public function deconnexion(){
		auth()->logout();
		
		return redirect('/');
	}
}
