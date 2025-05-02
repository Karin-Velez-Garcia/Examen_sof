<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        $departamentos = [
            'Guatemala', 'El Progreso', 'Sacatepéquez', 'Chimaltenango',
            'Escuintla', 'Santa Rosa', 'Sololá', 'Totonicapán', 'Quetzaltenango',
            'Suchitepéquez', 'Retalhuleu', 'San Marcos', 'Huehuetenango',
            'Quiché', 'Baja Verapaz', 'Alta Verapaz', 'Petén', 'Izabal',
            'Zacapa', 'Chiquimula', 'Jalapa', 'Jutiapa'
        ];

        foreach ($departamentos as $nombre) {
            Departamento::create(['nombre' => $nombre]);
        }
    }
}
