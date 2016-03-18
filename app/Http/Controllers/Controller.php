<?php

namespace App\Http\Controllers;

/* ===========================
# Repository namspace
============================*/
use App\Http\Repository\ClientRepository;
use App\Http\Repository\LicenseRepository;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
	{
		$this->clientRepository 	= new ClientRepository;
		$this->licenseRepository 	= new LicenseRepository;
	}
}
