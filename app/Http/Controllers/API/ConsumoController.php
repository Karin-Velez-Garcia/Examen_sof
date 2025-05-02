<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Unidad;

class ConsumoController extends Controller
{
    public function listarDepartamentos()
    {
        return Departamento::all();
    }

    // Listar municipios por ID de departamento
    public function listarTodosLosMunicipios()
{
    return Municipio::all();
}


    // Listar unidades (camiones)
    public function listarUnidades()
    {
        return Unidad::all();
    }

    // Calcular consumo de combustible
    public function calcularConsumo(Request $request)
    {
        $request->validate([
            'unidad_id' => 'required|exists:unidades,id',
            'municipio_id' => 'required|exists:municipios,id',
            'toneladas' => 'required|numeric|min:0'
        ]);

        $unidad = Unidad::find($request->unidad_id);
        $municipio = Municipio::find($request->municipio_id);
        $toneladas = $request->toneladas;

        if ($toneladas > $unidad->tonelaje_max) {
            return response()->json([
                'error' => 'El tonelaje excede la capacidad del camión.'
            ], 400);
        }

        $kilometros = $municipio->kilometraje;
        $consumo_estimado = $kilometros * $unidad->consumo_por_km;

        return response()->json([
            'departamento' => $municipio->departamento->nombre ?? null,
            'municipio' => $municipio->nombre,
            'unidad' => $unidad->placa,
            'toneladas' => $toneladas,
            'kilometros' => $kilometros,
            'consumo_estimado_litros' => $consumo_estimado
        ]);
    }
    
    // ✅ Agrega este nuevo método aquí
    public function datosIniciales()
    {
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $unidades = Unidad::all();
        $materias = \App\Models\Materia::all();

        return response()->json([
            'departamentos' => $departamentos,
            'municipios' => $municipios,
            'unidades' => $unidades,
            'materias' => $materias
        ]);
    }
    
}


