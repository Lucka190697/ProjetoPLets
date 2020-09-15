<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loans')->insert([
            [
                'loans_date' => '2020-08-11 00:00:00',
                'return_date' => '2020-08-11 00:00:00',
                'user_id' => 1,
                'book_id' => 2,
            ],
        ]);
    }
}
