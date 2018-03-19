<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Media;
use App\SocialNetwork;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$skills = Skill::all();
		$redesSociales = SocialNetwork::all();
		$images = Media::paginate(6);
		return view('page.index',compact('skills','images','redesSociales'));
	}
}
