<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	public function user()
	{
		$this->belongsTo('App\User');
	}
}
