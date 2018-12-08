<?php

use Faker\Generator as Faker;

$factory->define(\App\Coupon::class, function (Faker $faker) {
    return [
        'quantity' => $faker->numberBetween(1000,999900)
    ];
});
