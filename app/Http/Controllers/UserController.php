<?php

namespace App\Http\Controllers;


use App\Model\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   

	public function create(Request $request)
	{
		$data = $request->all();

		$create = [
			"email" 	=> $data['email'],
			"address" 	=> $data['address'],
			"orgname" 	=> $data['company_name'],
			"password" 	=> bcrypt($data['password']),
		];

		User::create($create);

		return User::all();
	}

}
