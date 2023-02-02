<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'user_id' => '1',
            'item_id'=>'AP077',
            'quantity'=>15
        ]);

        DB::table('carts')->insert([
            'user_id' => '1',
            'item_id'=>'AP710',
            'quantity'=>1
        ]);

    }
}
