<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagHasPost extends Model
{

	protected $table = 'tag_has_posts';
	
	public function post()
	{
		return $this->belongsTo('App\Post');
	}
	public function tag()
	{
		return $this->belongsTo('App\Tag');
	}
}
