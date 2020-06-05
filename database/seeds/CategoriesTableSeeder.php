<?php

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
        DB::table('category')->insert([
        	'name'=>Str::random(10),
        	'description'=>Str::random(10),
        ]);
    }
}
