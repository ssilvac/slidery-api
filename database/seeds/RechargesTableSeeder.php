<?php

use App\User;
use Illuminate\Database\Seeder;

class RechargesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user){

            $wallet = factory(\App\Wallet::class)->create([
                'user_id' => $user->id
            ]);

            factory(\App\Recharge::class, 5)->create([
                'wallet_id' => $wallet->id
            ]);
        }
    }
}
