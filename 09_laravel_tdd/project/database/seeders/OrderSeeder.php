<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            'user_id' => 2, // Kaczor Donald
            'products' => json_encode([
                ['name' => 'Gitara elektryczna', 'quantity' => 2],
            ]),
            'total_price' => 6000.00,
            'status' => 'oczekujące',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
