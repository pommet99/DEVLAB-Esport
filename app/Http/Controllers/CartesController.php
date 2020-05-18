<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carte;

class CartesController extends Controller
{	
    public function listeCarte(){
		$cartes = Carte::all();
		
		return view('cartes', [
			'cartes' => $cartes,
		]);
	}
	
    public function traitement(){
		request()->validate([
			'nom' => ['required', 'unique:cartes'],
		]);
		
		$carte = Carte::create([
			'nom' => request('nom'),
		]);
		
		if ($carte){
			return redirect('/carte');
		}
	}
}
