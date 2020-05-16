<?php

namespace App\Http\Controllers;

use App\Users;

class UsersController extends Controller
{
    public function liste(){
		$users = Users::all();
		
		return view('users', [
			'users' => $users,
		]);
	}
}
