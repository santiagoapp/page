<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	public function tags()
	{
		$this->hasMany('App/TagHasPost');
	}
}
