<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournoi;
use App\Carte;
use App\Utilisateur;
use Illuminate\Support\Facades\Auth;

class TournoiController extends Controller
{

	public function __construct()
	{
		if (!auth()->guest()){
			$this->middleware('auth');
			$this->user = \Auth::user();
		}
	}
	
    public function tournoi(){
		return view('tournoi');
	}
	
    public function rejoindreunique($id){
		
		if (auth()->guest()){
			return redirect('/connexion')->withErrors([
			 'email' => "Connectez vous pour accéder à cet espace",
			]);
		}
		
		$tournoi = Tournoi::findOrFail($id);
		
		$tournoiuser = Utilisateur::findOrFail(Auth::user()->id);
		$tournoiuser->tournoi_id = request('id');
		$tournoiuser->save();
		
		//$utilisateurs  request(Auth::user()->id);

		return view('tournoiunique', [
			'tournoi' => $tournoi,
		]);
	}

    public function creer(){
		$cartes = Carte::all();
		
		if (auth()->guest()){
			return redirect('/connexion')->withErrors([
			 'email' => "Connectez vous pour créer un tournoi",
			]);
		}
	
		return view('Tournoicreate', [
			'cartes' => $cartes,
		]);
	}

	public function see(){
		$tournois = Tournoi::all();

		return view('Tournoisee', [
			'tournois' => $tournois,
		]);
	}
	
    public function rejoindre(){
		$tournois = Tournoi::all();
		
		if (auth()->guest()){
			return redirect('/connexion')->withErrors([
			 'email' => "Connectez vous pour créer un tournoi",
			]);
		}
			
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
			'tournoi_id' => Auth::user()->id,
			'admin' => Auth::user()->pseudo,
		]);
		
		if ($tournoi){
			return redirect('/tournoijoin');
		}
	}
}