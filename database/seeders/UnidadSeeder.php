<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Unidad;

class UnidadSeeder extends Seeder
{
    public function run()
    {
        Unidad::create([
            'placa' => 'C123BCD',
            'tonelaje_max' => 10.0,
            'consumo_por_km' => 0.4 // 0.4 litros por km
        ]);

        Unidad::create([
            'placa' => 'D456EFG',
            'tonelaje_max' => 15.0,
            'consumo_por_km' => 0.6
        ]);
    }
}
