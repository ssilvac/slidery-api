<?php

use Faker\Generator as Faker;

$factory->define(\App\Wallet::class, function (Faker $faker) {
    return [
        'balance' => $faker->numberBetween(0,99999),
        'state' => $faker->numberBetween(1,3)
    ];
});
