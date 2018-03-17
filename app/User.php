<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'description', 'about', 'phone', 'img_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function testimonial()
    {
        $this->hasMany('App\Testimonial');
    }
    public function post()
    {
        $this->hasMany('App\Post');
    }
    public function image()
    {
        $this->hasOne('App\Media');
    }
    public function socialNetwork()
    {
        $this->hasMany('App\SocialNetwork');
    }
}
