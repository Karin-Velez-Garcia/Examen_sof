<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;
use App\Models\Departamento;

class MunicipioSeeder extends Seeder
{
    public function run()
    {
        // --- El Progreso ---
        $progreso = Departamento::firstOrCreate(['nombre' => 'El Progreso']);

        $municipiosProgreso = [
            ['nombre' => 'Guastatoya', 'kilometraje' => 0],
            ['nombre' => 'Sanarate', 'kilometraje' => 17],
            ['nombre' => 'El Jícaro', 'kilometraje' => 25],
            ['nombre' => 'Sansare', 'kilometraje' => 32],
            ['nombre' => 'San Agustín Acasaguastlán', 'kilometraje' => 40],
            ['nombre' => 'San Cristóbal Acasaguastlán', 'kilometraje' => 44],
            ['nombre' => 'Morazán', 'kilometraje' => 50],
            ['nombre' => 'San Antonio La Paz', 'kilometraje' => 20],
        ];

        foreach ($municipiosProgreso as $m) {
            Municipio::firstOrCreate(
                [
                    'nombre' => $m['nombre'],
                    'departamento_id' => $progreso->id,
                ],
                [
                    'kilometraje' => $m['kilometraje']
                ]
            );
        }

        // --- Guatemala ---
        $guatemala = Departamento::firstOrCreate(['nombre' => 'Guatemala']);

        $municipiosGuatemala = [
            ['nombre' => 'Guatemala', 'kilometraje' => 74],
            ['nombre' => 'Mixco', 'kilometraje' => 80],
            ['nombre' => 'Villa Nueva', 'kilometraje' => 78],
            ['nombre' => 'Villa Canales', 'kilometraje' => 85],
            ['nombre' => 'San Miguel Petapa', 'kilometraje' => 82],
            ['nombre' => 'Santa Catarina Pinula', 'kilometraje' => 76],
            ['nombre' => 'Amatitlán', 'kilometraje' => 95],
            ['nombre' => 'Palencia', 'kilometraje' => 60],
            ['nombre' => 'San José del Golfo', 'kilometraje' => 58],
            ['nombre' => 'Chinautla', 'kilometraje' => 70],
            ['nombre' => 'San Pedro Ayampuc', 'kilometraje' => 68],
            ['nombre' => 'Fraijanes', 'kilometraje' => 90],
            ['nombre' => 'San Juan Sacatepéquez', 'kilometraje' => 100],
            ['nombre' => 'San Raymundo', 'kilometraje' => 98],
            ['nombre' => 'Chuarrancho', 'kilometraje' => 93],
        ];

        foreach ($municipiosGuatemala as $m) {
            Municipio::firstOrCreate(
                [
                    'nombre' => $m['nombre'],
                    'departamento_id' => $guatemala->id,
                ],
                [
                    'kilometraje' => $m['kilometraje']
                ]
            );
        }
    }
}
