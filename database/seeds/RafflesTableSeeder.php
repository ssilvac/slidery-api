<?php

use Illuminate\Database\Seeder;

class RafflesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prizes = \App\Prize::all();

        foreach ($prizes as $prize) {

            factory(\App\Raffle::class)->create([
                'prize_id' => $prize->id
            ]);
        }
    }
}
