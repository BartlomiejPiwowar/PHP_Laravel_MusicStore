<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Konkurs;

class KonkursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konkurs::create([
            'name' => 'Jan Kowalski',
            'email' => 'jan.kowalski@example.com',
            'answer' => 'Muzyka smakuje jak czekolada!'
        ]);

        Konkurs::create([
            'name' => 'Anna Nowak',
            'email' => 'anna.nowak@example.com',
            'answer' => 'Muzyka to smak letniego sadu!'
        ]);
    }
}
