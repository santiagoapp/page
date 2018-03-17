<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	return [
		'author_id'=> 1,
		'image_id'=> 1,
		
		$table->integer('author_id')->unsigned();
		$table->integer('image_id')->unsigned();
		$table->string('title');
		$table->string('excerpt');
		$table->string('status')->default('Inactivo');
		$table->text('content');
		$table->foreign('author_id')->references('id')->on('users');
		$table->foreign('image_id')->references('id')->on('media');
	];
});
