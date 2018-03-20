<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	public function tags()
	{
		return $this->hasMany('App/TagHasPost');
	}
}
