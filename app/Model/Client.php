<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = [
		'email', 
		'password',
		'company_name', 
	];

	public function license()
	{
		return $this->hasMany('App\Model\License');
	}
}