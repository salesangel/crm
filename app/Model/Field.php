<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{

	protected $fillable = [
		'org_id', 
		'objname',
	];

	public function org()
	{
		return $this->belongsTo('App\Model\Org');
	}

	public function objects()
	{
		return $this->belongsTo('App\Model\Object');
	}
}
