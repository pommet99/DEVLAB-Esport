<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model {
	protected $fillable = ['nom', 'password', 'date'];
}