<?php

namespace App\Http\Repository;

use Carbon\Carbon;
use App\Model\License;

class LicenseRepository
{
	/* ===========================
	# Select * License from the database
	============================*/
	public function getAllLicense()
	{
		return License::all();
	}


	public function generateLicenseKey($company_name)
	{
		return hash('sha256', $company_name . Carbon::now());	
	}

	/* ===========================
	# Select License by {id}
	============================*/	
	public function getLicenseById($id)
	{
		return License::find($id);
	}

	/* ===========================
	# Select License by {company_name}
	============================*/	
	public function getCompanyNameByName($company_name)
	{
		return License::where('company_name', $company_name)->get();
	}

	public function createLicenseKey($data)
	{
		$create = [
			"client_id" 	=> $data['client_id'],
			"license_key" 	=> $data['license_key'],
		];

		return License::create($create);
	}

}