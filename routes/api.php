<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ConsumoController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/departamentos', [ConsumoController::class, 'listarDepartamentos']);
Route::get('/municipios', [ConsumoController::class, 'listarTodosLosMunicipios']);
Route::get('/municipios', [ConsumoController::class, 'listarTodosLosMunicipios']);
Route::get('/unidades', [ConsumoController::class, 'listarUnidades']);
Route::post('/calcular-consumo', [ConsumoController::class, 'calcularConsumo']);
Route::get('/datos-iniciales', [ConsumoController::class, 'datosIniciales']);