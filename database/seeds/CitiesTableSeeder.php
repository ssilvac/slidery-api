<?php

use App\Region;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\City::class, 5)->create([
            'region_id' => factory(Region::class)->create()->id
        ]);

        factory(\App\City::class, 5)->create([
            'region_id' => factory(Region::class)->create()->id
        ]);

        factory(\App\City::class, 5)->create([
            'region_id' => factory(Region::class)->create()->id
        ]);

        factory(\App\City::class, 5)->create([
            'region_id' => factory(Region::class)->create()->id
        ]);

        factory(\App\City::class, 5)->create([
            'region_id' => factory(Region::class)->create()->id
        ]);

        factory(\App\City::class, 5)->create([
            'region_id' => factory(Region::class)->create()->id
        ]);

        factory(\App\City::class, 5)->create([
            'region_id' => factory(Region::class)->create()->id
        ]);
    }
}
