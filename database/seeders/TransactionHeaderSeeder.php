<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_headers')->insert([
            'user_id' => '1',
            'transaction_date' => '2022-12-24'
        ]);

        DB::table('transaction_headers')->insert([
            'user_id' => '1',
            'transaction_date' => '2023-1-3'
        ]);
    }
}
