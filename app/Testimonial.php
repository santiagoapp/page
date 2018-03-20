<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	public function imagen()
	{
		return $this->hasOne('App\Media','id','image_id');
	}
}
