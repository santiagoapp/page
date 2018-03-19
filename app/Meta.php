<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
	public function post()
	{
		$this->belongsTo('App\Post');
	}
}
