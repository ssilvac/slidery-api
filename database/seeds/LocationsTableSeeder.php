<?php

use App\City;
use App\Location;
use App\User;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all();

        foreach ($user as $user){

            factory(Location::class)->create([
                'user_id' => $user->id,
                'city_id' => City::inRandomOrder()->first()->id,
            ]);

        }
    }
}
