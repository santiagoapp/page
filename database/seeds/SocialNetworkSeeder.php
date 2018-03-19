<?php

use Illuminate\Database\Seeder;
// use SocialNetwork;

class SocialNetworkSeeder extends Seeder
{

	public function run()
	{
		$asd = [
			'Facebook',
			'Instagram',
			'Twitter',
			'GitHub',
			'Youtube'
		];

		$icons = [
			'fa-facebook-official',
			'fa-instagram',
			'fa-twitter',
			'fa-github',
			'fa-youtube-play'
		];
		
		foreach ($asd as $key => $name) {
			factory(\App\SocialNetwork::class)->create([
				'name' => $name,
				'icon' => $icons[$key]
			]);
		}
		

	}
}
