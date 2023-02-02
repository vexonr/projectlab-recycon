<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert([
            'transaction_id'=>'1',
            'item_id'=>'FU068',
            'quantity'=>1
        ]);

        DB::table('transaction_details')->insert([
            'transaction_id'=>'1',
            'item_id'=>'AC031',
            'quantity'=>3
        ]);

        DB::table('transaction_details')->insert([
            'transaction_id'=>'2',
            'item_id'=>'AC006',
            'quantity'=>7
        ]);
    }
}
