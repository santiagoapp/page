<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    public function user()
    {
    	$this->belongsTo('App/User');
    }
}
