<?php

use App\Coupon;
use App\Prize;
use App\User;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'sebasilvac88@gmail.com')->first();

        factory(Coupon::class, 3)->create([
            'user_id' => $user->id,
            'prize_id' => Prize::inRandomOrder()->first()->id,
        ]);

        factory(Coupon::class, 3)->create([
            'user_id' => User::inRandomOrder()->first()->id,
            'prize_id' => Prize::inRandomOrder()->first()->id,
        ]);

        factory(Coupon::class, 3)->create([
            'user_id' => User::inRandomOrder()->first()->id,
            'prize_id' => Prize::inRandomOrder()->first()->id,
        ]);

        factory(Coupon::class, 3)->create([
            'user_id' => User::inRandomOrder()->first()->id,
            'prize_id' => Prize::inRandomOrder()->first()->id,
        ]);

        factory(Coupon::class, 3)->create([
            'user_id' => User::inRandomOrder()->first()->id,
            'prize_id' => Prize::inRandomOrder()->first()->id,
        ]);
    }
}
