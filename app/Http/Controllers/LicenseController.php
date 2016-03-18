<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicenseController extends Controller
{
	public function index()
	{
		return $this->licenseRepository->getAllLicense();
	}

	public function create(Request $request)
	{
		$license_key 	=  $this->licenseRepository->generateLicenseKey($request['company_name']);
		$request['license_key'] = $license_key;

		return $this->licenseRepository->createLicenseKey($request->all());
	}
}
