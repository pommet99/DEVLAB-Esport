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
			'name' => ['required'],
			'password' => ['required'],
		]);
		
		$resultat = auth()->attempt([
			'name' => request('name'),
			'password' => request('password'),
		]);
		
		if ($resultat){
			return redirect('/compte');
		}
		
		return back()->withInput()->withErrors([
			'name' => 'Vos Identifiants sont incorrects.',
		]);
	}
}
