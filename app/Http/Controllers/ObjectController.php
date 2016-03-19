<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ObjectController extends Controller
{
	
	public function index()
	{
		return 3;
	}


	public function create(Request $request)
	{
		return $request->all();
	}
}
