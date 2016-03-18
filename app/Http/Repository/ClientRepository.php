<?php

namespace App\Http\Repository;

use App\Model\Client;

class ClientRepository
{
	/* ===========================
	# Select * Client from the database
	============================*/
	public function getAllClient()
	{
		return Client::all();
	}

	/* ===========================
	# Select Client by {id}
	============================*/	
	public function getClientById($id)
	{
		return Client::find($id);
	}

	/* ===========================
	# Select Client by {company_name}
	============================*/	
	public function getCompanyNameByName($company_name)
	{
		return Client::with('license')->where('company_name', $company_name)->get();
	}

	/* ===========================
	# Create New Client in the database
	============================*/
	public function createClient($data)
	{
		$create = [
			"email" 		=> $data['email'],
			"password"		=> bcrypt($data['password']),
			"company_name" 	=> $data['company_name'],
		];

		return Client::create($create);
	}
}