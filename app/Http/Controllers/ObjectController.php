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
		return Object::with('field')->get();
	}


	public function create(Request $request)
	{
		$data =  $request->all();

		$object = [
			"org_id" 	=> $data['orgid'],
			"obj_name" 	=> $data['objname'],
		];

		Object::create($object);

		return Object::all();

	}
}
