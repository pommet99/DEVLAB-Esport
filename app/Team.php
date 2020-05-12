<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model {
	protected $fillable = ['role', 'name', 'password', 'numberOfPlayers'];
}