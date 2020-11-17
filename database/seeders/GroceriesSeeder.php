<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroceriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groceries')->insert([
            ['ean' => '','name' => 'Milk','category' => 'food','price' => 125],
            ['ean' => '','name' => 'Water','category' => 'food','price' => 0],
            ['ean' => '','name' => 'Cola','category' => 'food','price' => 199],
            ['ean' => '','name' => 'Apple','category' => 'food','price' => 0],
            ['ean' => '','name' => 'Wine','category' => 'food','price' => 699],
            ['ean' => '','name' => 'Beer','category' => 'food','price' => 0],
            ['ean' => '','name' => 'Potatos','category' => 'food','price' => 0],
            ['ean' => '','name' => 'Pasta','category' => 'food','price' => 129],
            ['ean' => '','name' => 'Tomato','category' => 'food','price' => 0],
            ['ean' => '','name' => 'Razor Blade','category' => 'hygiene','price' => 110]
        ]);
    }
}
