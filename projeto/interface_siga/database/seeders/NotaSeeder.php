<?php

namespace Database\Seeders;

use App\Models\nota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        nota::create([
            'materia_id' => 1,
            'user_id' => 1,
            'nota_p1'=> '8',
            'nota_p2'=> '6'
        ]);

        nota::create([
            'materia_id' => 2,
            'user_id' => 1,
            'nota_p1'=> '9',
            'nota_p2'=> '7'
        ]);

        nota::create([
            'materia_id' => 3,
            'user_id' => 1,
            'nota_p1'=> '6',
            'nota_p2'=> '7'
        ]);

        nota::create([
            'materia_id' => 1,
            'user_id' => 2,
            'nota_p1'=> '7',
            'nota_p2'=> '6'
        ]);

        nota::create([
            'materia_id' => 2,
            'user_id' => 2,
            'nota_p1'=> '5',
            'nota_p2'=> '7'
        ]);
        
        nota::create([
            'materia_id' => 3,
            'user_id' => 2,
            'nota_p1'=> '6',
            'nota_p2'=> '10'
        ]);
    }
}
