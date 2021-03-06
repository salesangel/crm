<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{

	  protected $primaryKey = 'objid';

	protected $fillable = [
		'org_id', 
		'obj_name',
	];

	public function org()
	{
		return $this->belongsTo('App\Model\Org');
	}

	public function field()
	{
		return $this->hasMany('App\Model\Field');
	}
}
