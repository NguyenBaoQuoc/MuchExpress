<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\menu;
use Faker\Generator as Faker;

$factory->define(App\models\menu::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraphs(2,true),
        'price' => $faker->numberBetween(99,999)
    ];
});
