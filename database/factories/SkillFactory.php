<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
	return [
		'name' => $faker->jobTitle(),
		'percentage' => $faker->numberBetween($min = 1, $max = 100)
	];
});
