<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@test',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => 'Maria',
            'email' => 'maria@test',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => 'Bob',
            'email' => 'bob@test',
            'password' => bcrypt('1234')
        ]);
    }
}
