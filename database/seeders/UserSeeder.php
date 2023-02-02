<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'iwandarmawan123',
            'email' => 'iwan2@gmail.com',
            'password' => bcrypt('iwan123'),
            'role'=> 'user'
        ]);

        DB::table('users')->insert([
            'username' => 'jerremy_gatau222',
            'email' => 'jerremy@gmail.com',
            'password' => bcrypt('jerremy222'),
            'role'=> 'user'
        ]);

        DB::table('users')->insert([
            'username' => 'jason_admin',
            'email' => 'jason@gmail.com',
            'password' => bcrypt('adminpassword'),
            'role'=> 'admin'
        ]);
    }
}
