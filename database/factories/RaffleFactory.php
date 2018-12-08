<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(\App\Raffle::class, function (Faker $faker) {
    return [
        'date' => Carbon::now('America/Santiago')->addMonth(),
        'prize_id' => factory(\App\Prize::class)->create()->id
    ];
});
