<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'ayuuu123@gmail.com',
                'password' => Hash::make('mardira12'),
                'isAdmin' => true
            ],
            [
                'name' => 'User',
                'email' => 'arip29@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => false
            ]
        ]);
    }
}
