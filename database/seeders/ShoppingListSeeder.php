<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopping_lists')->insert([
            ['name' => 'Vegetables', 'category' => 'groceries', 'template' => false],
            ['name' => 'Hardware store', 'category' => 'household items', 'template' => false],
            ['name' => 'Weekly shopping', 'category' => 'groceries', 'template' => true]
        ]);
    }
}
