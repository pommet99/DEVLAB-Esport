<?php

namespace App\Http\Controllers;

use App\Tournoi;

class TournoiController extends Controller
{
    public function tournoi(){
		return view('tournoi');
	}

    public function creer(){
		return view('Tournoicreate');
	}

	public function see(){
		return view('Tournoisee');
	}
	
    public function rejoindre(){
		return view('Tournoijoin');
    }

        public function creertournoi(){
		request()->validate([
			'name' => ['required'],
			'password' => ['min:3'],
			'date' => ['required'],
			'admin' => ['required'],
			
		]);
		
		
		$salon = Tournoi::create([
			'name' => request('name'),
			'password' => bcrypt(request('password')),
			'date' => request('date'),
			'rank' => request('rank'),
		]);
		
		return redirect('/tournoicreate');
	}
    
}