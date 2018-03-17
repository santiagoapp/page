<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryHasPost extends Model
{
	public function post()
	{
		$this->belongsTo('App/Post');
	}
	public function category()
	{
		$this->belongsTo('App/Category');
	}
}
