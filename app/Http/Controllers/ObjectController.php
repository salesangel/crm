<?php

namespace App\Http\Controllers;

use App\Model\Object;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObjectController extends Controller
{
	
	public function index()
	{
		return 3;
	}


	public function create(Request $request)
	{
		$data =  $request->all();

		$object = [
			"orgid" 	=> $data['orgid'],
			"objname" 	=> $data['objname'],
		];

		Object::create($object);

		return Object::all();

	}
}
