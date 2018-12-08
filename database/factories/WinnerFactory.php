<?php

use App\Raffle;
use App\User;
use Faker\Generator as Faker;

$factory->define(\App\Winner::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'raffle_id' => Raffle::inRandomOrder()->first()->id
    ];
});
