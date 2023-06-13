<?php

namespace Database\Seeders;

use App\Models\materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        materia::create([
            'nome'=> 'Programação',
            'sigla'=> 'PGA002',
            'professor'=> 'Professor',
            'turma'=> 'A',
           
        ]);

        materia::create([
            'nome'=> 'Programação Web',
            'sigla'=> 'PGA001',
            'professor'=> 'Professor1',
            'turma'=> 'A',
        ]);

        materia::create([
            'nome'=> 'Programação 2',
            'sigla'=> 'PGA004',
            'professor'=> 'Professor3',
            'turma'=> 'A',
        ]);


      

    }
}
