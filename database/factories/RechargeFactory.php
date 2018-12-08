<?php

use Faker\Generator as Faker;

$factory->define(\App\Recharge::class, function (Faker $faker) {
    return [
        'quantity_coupons' => $faker->numberBetween(1,100),
        'price' => $faker->numberBetween(100,9999)
    ];
});
