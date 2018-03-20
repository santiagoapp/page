<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	public function post()
	{
		return $this->belongsTo('App\Post');
	}
	public function testimonial()
	{
		return $this->belongsTo('App\Testimonial');
	}
}
