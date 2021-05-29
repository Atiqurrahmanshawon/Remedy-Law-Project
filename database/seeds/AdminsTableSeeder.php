<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name'=>'admin',
            'role_id'=>'1',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        DB::table('users')->insert([

            'name'=>'user',
            'role_id'=>'2',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('12345')
        ]);

    }
}
