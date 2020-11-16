<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilyMemberSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('family_members')->insert([
            ['salutation_id' => '1', 'first_name' => 'Max', 'surname' => 'Mustermann', 'nickname' => 'Maxi', 'birthday' => '36526', 'email' => 'Max.Mustermann@gmail.com', 'password_hash' => '6dr5thrgfdr'],
            ['salutation_id' => '2', 'first_name' => 'Tabea', 'surname' => 'Müller', 'nickname' => 'Tabi', 'birthday' => '31607', 'email' => 'Tabea.Müller@gmail.com', 'password_hash' => '8w47ighiusf',],
            ['salutation_id' => '2', 'first_name' => 'Jennifer', 'surname' => 'Meier', 'nickname' => 'Jenny', 'birthday' => '35024', 'email' => 'Jennifer.Meier@gmail.com', 'password_hash' => 'e46stdbrtgd',],
            ['salutation_id' => '1', 'first_name' => 'Thomas', 'surname' => 'Schmidt', 'nickname' => 'Tommi', 'birthday' => '36986', 'email' => 'Thomas.Schmidt@gmail.com', 'password_hash' => 'sbet4s5etvsdr',],
            ['salutation_id' => '1', 'first_name' => 'Johann', 'surname' => 'Siemens', 'nickname' => 'John', 'birthday' => '27697', 'email' => 'Johann.Siemens@gmail.com', 'password_hash' => 'sbett5erdxf',]
        ]);
    }
}
