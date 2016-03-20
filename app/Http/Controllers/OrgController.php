<?php

namespace App\Http\Controllers;


use App\Model\Org;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrgController extends Controller
{
   

   	public function index()
   	{
   		return Org::with('objects')->get();
   	}

	public function create(Request $request)
	{
		$data = $request->all();

		$create = [
			"email" 	=> $data['email'],
			"address" 	=> $data['address'],
			"org_name" 	=> $data['company_name'],
			"password" 	=> bcrypt($data['password']),
		];

		Org::create($create);
		return Org::all();
	}

}
