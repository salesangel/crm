<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return $this->clientRepository->getAllClient();
	}

	public function create(Request $request)
	{
		return $this->clientRepository->createClient($request->all());
	}

	public function client($company_name)
	{
		return $this->clientRepository->getCompanyNameByName($company_name);
	}


}
