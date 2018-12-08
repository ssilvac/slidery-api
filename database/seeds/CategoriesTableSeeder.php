<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Electro y tenología']);
        Category::create(['name' => 'Decohogar']);
        Category::create(['name' => 'Juguetería']);
        Category::create(['name' => 'Deportes']);
        Category::create(['name' => 'Moda mujer']);
        Category::create(['name' => 'Moda hombre']);
    }
}
