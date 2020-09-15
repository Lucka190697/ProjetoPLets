<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Bruce Wayne',
                'email' => 'teste@email.com',
                'password' => Hash::make('123456'),
                'thumbnail' => 'default.jpg',
                'phone' => '1234567890',
                'isadmin' => true,
            ],
            [
                'name' => 'Alfred Pennyworth',
                'email' => 'alfred@wayneenterprise.com',
                'password' =>  Hash::make('123456'),
                'thumbnail' => 'default.jpg',
                'phone' => '1234567890',
                'isadmin' => false,
            ]
        ]);
    }
}
