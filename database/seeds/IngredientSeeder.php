<?php

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'sucre',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'sel',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'eau',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'farine',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'oeuf',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'chocolat',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'vanille',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'fraise',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'pomme',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'banane',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'miel',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'beurre',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'creme',
        ]);
    }
}
