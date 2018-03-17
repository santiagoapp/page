<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagHasPost extends Model
{
	public function post()
	{
		$this->belongsTo('App/Post');
	}
	public function tag()
	{
		$this->belongsTo('App/Tag');
	}
}
