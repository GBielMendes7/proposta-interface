<?php

namespace Database\Seeders;

use App\Models\Falta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaltaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Falta::create([
            'materia_id' => 1,
            'user_id' => 1,
            'presenca'=> '20',
            'falta'=> '10',
        ]);
        Falta::create([
            'materia_id' => 2,
            'user_id' => 1,
            'presenca'=> '30',
            'falta'=> '20',
        ]);
        Falta::create([
            'materia_id' => 3,
            'user_id' => 1,
            'presenca'=> '50',
            'falta'=> '15',
        ]);

        Falta::create([
            'materia_id' => 1,
            'user_id' => 2,
            'presenca'=> '70',
            'falta'=> '10',
        ]);
        Falta::create([
            'materia_id' => 2,
            'user_id' => 2,
            'presenca'=> '60',
            'falta'=> '20',
        ]);
        Falta::create([
            'materia_id' => 3,
            'user_id' => 2,
            'presenca'=> '50',
            'falta'=> '15',
        ]);
    }
}
