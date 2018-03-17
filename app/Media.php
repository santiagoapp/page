<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
	public function user()
	{
		$this->belongsTo('App\User');
	}
	public function post()
	{
		$this->belongsTo('App\Post');
	}
}
