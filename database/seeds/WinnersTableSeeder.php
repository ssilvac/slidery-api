<?php

use App\User;
use Illuminate\Database\Seeder;

class WinnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'sebasilvac88@gmail.com')->first();

        factory(\App\Winner::class)->create([
            'user_id' => $user->id
        ]);

        factory(\App\Winner::class, 5)->create();
    }
}
