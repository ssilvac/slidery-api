<?php

use Faker\Generator as Faker;

$factory->define(\App\Prize::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'category_id' => \App\Category::inRandomOrder()->first()->id
    ];
});
