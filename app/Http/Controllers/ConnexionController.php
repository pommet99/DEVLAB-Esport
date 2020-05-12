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
			'pseudo' => ['required'],
			'password' => ['required'],
		]);
		
		$resultat = auth()->attempt([
			'pseudo' => request('pseudo'),
			'password' => request('password'),
		]);
		
		if ($resultat){
			return redirect('/compte');
		}
		
		return back()->withInput()->withErrors([
			'pseudo' => 'Vos Identifiants sont incorrects.',
		]);
	}
}
