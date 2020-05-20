<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use App\Tournoi;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
	
	public function __construct()
	{
		if (!auth()->guest()){
			$this->middleware('auth');
			$this->user = \Auth::user();
		}
	}
	
    public function accueil(){
		if (auth()->guest()){
			return redirect('/connexion')->withErrors([
			 'email' => "Connectez vous pour accéder à votre compte",
			]);
		}
		
		$utilisateur = Utilisateur::findOrFail(Auth::user()->id);
		$tournois = $utilisateur->tournois;

		return view('compte', [
			'utilisateur' => $utilisateur,
			'tournois' => $tournois,
		]);
	}

	public function deconnexion(){
		auth()->logout();
		
		return redirect('/');
	}
	
	public function edit($id){
		return view('compteedit', ['utilisateur' => Utilisateur::findOrFail($id)]);
    }
	
	public function edittraitement($id){
		request()->validate([
			'pseudo' => ['required','unique:utilisateurs'],
		]);
		
		$utilisateur = Utilisateur::findOrFail($id);
		$utilisateur->pseudo = request('pseudo');
		$utilisateur->save();
		
		if ($utilisateur){
			return redirect('/compte');
		}
    }
}
