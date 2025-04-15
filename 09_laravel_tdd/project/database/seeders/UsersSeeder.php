<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Kaczor Donald',
            'email' => 'kaczor.donald@gmail.com',
            'password' => bcrypt('secret'),
            'is_admin' => false,
        ]);
    }
}
