<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{

	protected $fillable = [
		'orgid', 
		'objname',
	];
}
