<?php

use Illuminate\Database\Seeder;

class DessertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('desserts')->insert([
            'name' => 'tiramisu',
        ]);
        DB::table('desserts')->insert([
            'name' => 'banana splits',
        ]);
        DB::table('desserts')->insert([
            'name' => 'omellete au fromage',
        ]);
        DB::table('desserts')->insert([
            'name' => 'gauffre au chocolat',
        ]);
        DB::table('desserts')->insert([
            'name' => 'crepe',
        ]);
        DB::table('desserts')->insert([
            'name' => 'crepe au nutella',
        ]);
       
    }
}
