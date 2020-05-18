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
			'email' => ['required','unique:utilisateurs'],
			'pseudo' => ['required','unique:utilisateurs'],
			'password' => ['required', 'confirmed', 'min:6'],
			'password_confirmation' => ['required'],
		]);
		
		
		$utilisateur = Utilisateur::create([
			'email' => request('email'),
			'pseudo' => request('pseudo'),
			'password' => bcrypt(request('password')),
		]);
		
		return redirect('/connexion');
	}
}
