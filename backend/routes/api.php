<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;

// Rutas API REST para Clientes
Route::apiResource('clientes', ClienteController::class);

// Rutas API REST para Artículos/Servicios
use App\Http\Controllers\Api\ArticuloController;
Route::apiResource('articulos', ArticuloController::class);

// Rutas API REST para Paquetes
use App\Http\Controllers\Api\PaqueteController;
Route::apiResource('paquetes', PaqueteController::class);

// Rutas API REST para Rentas
use App\Http\Controllers\Api\RentaController;
Route::apiResource('rentas', RentaController::class);

// Rutas API REST para Cotizaciones
use App\Http\Controllers\Api\CotizacionController;
Route::apiResource('cotizaciones', CotizacionController::class);
