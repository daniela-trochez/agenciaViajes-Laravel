<?php

use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//http://localhost/agenciaViajes-Laravel/public/viajeros
Route::resource('viajeros', ViajeroController::class);
Route::resource('viajes',ViajeController::class);



