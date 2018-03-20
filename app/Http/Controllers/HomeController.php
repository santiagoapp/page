<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Media;
use App\SocialNetwork;
use App\Testimonial;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	public function index()
	{
		$skills = Skill::orderBy('id','desc')->get();
		$testimonials = Testimonial::orderBy('id','desc')->get();
		$redesSociales = SocialNetwork::all();
		$images = Media::paginate(6);
		$entradas = Post::orderBy('id','desc')->get();
		return view('page.index',compact('skills','images','redesSociales','testimonials','entradas'));
	}
}
