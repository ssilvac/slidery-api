<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sebastián Silva',
            'email' => 'sebasilvac88@gmail.com',
            'phone' => '56949920847',
            'password' => bcrypt('123456')
        ]);

        factory(User::class, 50)->create();
    }
}
