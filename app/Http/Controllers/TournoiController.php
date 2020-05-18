<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournoi;

class TournoiController extends Controller
{
    public function tournoi(){
		return view('tournoi');
	}

    public function creer(){
		
		if (auth()->guest()){
			return redirect('/connexion')->withErrors([
			 'email' => "Connectez vous pour créer un tournoi",
			]);
		}		
		return view('Tournoicreate');

	}

	public function see(){
		$tournois = Tournoi::all();

		return view('Tournoisee', [
			'tournois' => $tournois,
		]);
	}
	
    public function rejoindre(){
		$tournois = Tournoi::all();

		return view('Tournoijoin', [
			'tournois' => $tournois,
		]);
    }

    public function traitement(){
		request()->validate([
			'nom' => ['required', 'unique:tournois'],
			'password' => ['required', 'min:6'],
			'date' => ['required', 'date'],
		]);
		
		
		$tournoi = Tournoi::create([
			'nom' => request('nom'),
			'password' => bcrypt(request('password')),
			'date' => request('date'),
		]);
		
		if ($tournoi){
			return redirect('/tournoijoin');
		}
	}
}