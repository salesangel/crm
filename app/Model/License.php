<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
	protected $fillable = [
		'client_id', 
		'license_key',
	];

	public function client()
	{
		return $this->belongsTo('App\Model\Client');
	}
}