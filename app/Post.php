<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function author()
	{
		$this->belongsTo('App/User');
	}
	public function image()
	{
		$this->hasOne('App/Media');
	}
	public function meta()
	{
		$this->hasOne('App/Meta');
	}
	public function tags()
	{
		$this->hasMany('App/TagHasPost');
	}
}
