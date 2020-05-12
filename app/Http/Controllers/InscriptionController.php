<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire(){
		return view('inscription');
	}
	
    public function traitement(){
		request()->validate([
			'pseudo' => ['required'],
			'password' => ['required', 'confirmed', 'min:6'],
			'password_confirmation' => ['required'],
		]);
		
		
		$utilisateur = Utilisateur::create([
			'pseudo' => request('pseudo'),
			'password' => bcrypt(request('password')),
		]);
		
		return redirect('/connexion');
	}
}
