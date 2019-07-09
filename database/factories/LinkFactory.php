<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Link;
use Faker\Generator as Faker;

$factory->define(Link::class, function (Faker $faker) {
	$update = $faker->dateTimeThisMonth();

	$create = $faker->dateTimeThisMonth($update);
    return [
        'title'	=> $faker->name,
        'link'	=> $faker->url,
        'created_at'	=>  $create,
        'updated_at'	=>	$update,
    ];
});
