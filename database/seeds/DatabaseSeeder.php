<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'categories',
            'coupons',
            'locations',
            'cities',
            'prizes',
            'raffles',
            'recharges',
            'regions',
            'wallets',
            'winners'
        ]);

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(PrizesTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(RafflesTableSeeder::class);
        $this->call(RechargesTableSeeder::class);
        $this->call(WinnersTableSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
