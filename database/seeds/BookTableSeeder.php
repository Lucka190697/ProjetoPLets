<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'isbn' => 1234567891234,
                'title' => 'Crisis on Infinite Earths',
                'author' => 'Marv Wolfman',
                'giver' => 'Barry Allen',
                'entryDate' => '2020-08-03 21:30:00',
                'thumbnail' => 'default.jpg',
            ],
            [
                'isbn' => 2345678912345,
                'title' => 'O reino do Amanhã',
                'author' => 'Mark Waid e Alex Ross',
                'giver' => 'Sue Dibny',
                'entryDate' => '2020-08-03 21:30:00',
                'thumbnail' => 'default.jpg',
            ],
        ]);
    }
}
