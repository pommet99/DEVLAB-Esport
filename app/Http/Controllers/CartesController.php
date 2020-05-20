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
	
	public function edit($id){
		return view('carteedit', ['carte' => Carte::findOrFail($id)]);
    }
	
	public function edittraitement($id){
		request()->validate([
			'nom' => ['required', 'unique:cartes'],
		]);
		
		$carte = Carte::findOrFail($id);
		$carte->nom = request('nom');
		$carte->save();
		
		if ($carte){
			return redirect('/carte');
		}
    }
	
	public function destroy($id){
		$carte = Carte::destroy($id);
		if ($carte){
			return redirect('/carte');
		}
	}
}
