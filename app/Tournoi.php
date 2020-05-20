<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model {
	protected $fillable = ['nom', 'admin', 'password', 'date'];
	
	public function utilisateurs()
	{
		return $this->hasMany(Utilisateur::class);
	}
	
	/*
	public function cartes()
	{
		return $this->belongsToMany(Carte::class);
	}
	*/
}