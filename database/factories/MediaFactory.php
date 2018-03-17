<?php

use Faker\Generator as Faker;

$factory->define(App\Media::class, function (Faker $faker) {
	return [
		'path' => $faker->imageUrl(800, 600, 'cats'),
		'name' => $faker->name(),
		'alt' => $faker->sentence($nbWords = 3, $variableNbWords = true),
		'description' => $faker->sentence($nbWords = 7, $variableNbWords = true),

	];
});
