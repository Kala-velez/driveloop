<?php

use App\Modules\PublicacionVehiculos\Controllers\VehiculosController;
use Illuminate\Support\Facades\Route;

Route::prefix('publicacion-vehiculo')->group(function () {
    Route::get('/', function() { return view("modules.PublicacionVehiculo.index"); })->name('publicacion.vehiculo');
    // Route::get('/vehiculos.create', function() { return view("modules.PublicacionVehiculo.publicarVehiculo");})->name('vehiculos.create');
    Route::get('/vehiculos.create', [VehiculosController::class, 'index'])->name('vehiculos.create');
});