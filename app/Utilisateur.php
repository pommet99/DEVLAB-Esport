<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable {
	use BasicAuthenticatable;
	protected $fillable = ['pseudo', 'email', 'password', 'role', 'tournoi_id'];
	
    public function tournois()
    {
        return $this->belongsTo(Tournoi::class, 'tournoi_id');
    }
	
	/**
	* Get the password for the user
	*
	* @return string
	*/
	public function getAuthPassword(){
		return $this->password;
	}
	
	/**
	* Get the password for the user
	*
	* @return string
	*/
	public function getRememberTokenName(){
		return '';
	}
}