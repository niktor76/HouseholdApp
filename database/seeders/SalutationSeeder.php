<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salutations')->insert([
            ['name' => 'Mr.'],
            ['name' => 'Mrs.'],
            ['name' => 'Ms.']
        ]);
    }
}
