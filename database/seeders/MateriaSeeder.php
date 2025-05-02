<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriaSeeder extends Seeder
{
    public function run()
    {
        Materia::create([
            'nombre' => 'Hierro'
        ]);
    }
}
