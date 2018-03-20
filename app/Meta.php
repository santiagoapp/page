<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
	public function post()
	{
		return $this->belongsTo('App\Post');
	}
}
