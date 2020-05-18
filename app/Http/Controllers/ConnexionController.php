<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class ConnexionController extends Controller
{
    public function formulaire(){
		return view('connexion');
	}
	
    public function traitement(){
		request()->validate([
			'email' => ['required'],
			'password' => ['required'],
		]);
		
		$resultat = auth()->attempt([
			'email' => request('email'),
			'password' => request('password'),
		]);
		
		if ($resultat){
			return redirect('/compte');
		}
		
		return back()->withInput()->withErrors([
			'email' => 'Vos Identifiants sont incorrects.',
		]);
	}
}
