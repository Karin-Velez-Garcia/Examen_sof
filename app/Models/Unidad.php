<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidades'; 

    protected $fillable = [
        'placa',
        'tonelaje_max',
        'consumo_por_km',
    ];
}
