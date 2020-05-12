<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model {
	protected $fillable = ['tournament_name', 'date', 'password', 'rank'];
}