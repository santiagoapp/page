<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function autor()
	{
		return $this->belongsTo('App\User','author_id','id');
	}
	public function imagen()
	{
		return $this->hasOne('App\Media','id','image_id');
	}
	public function meta()
	{
		return $this->hasOne('App\Meta');
	}
	public function tags()
	{
		return $this->hasMany('App\TagHasPost');
	}
}
