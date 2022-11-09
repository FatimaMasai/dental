<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('', [HomeController::class, 'index'])->name('admin.home');; 
//php artisan r:l --name=personas
Route::resource('personas', PersonaController::class)->names('personas');
 
//admin/ el admin se coloca en el blade en la url
Route::get('reportes/personas', [ReporteController::class, 'reportePersonas'])->name('personas.download');

//Exportar a Excel
Route::get('excel/personas', [PersonaController::class, 'exportarExcelPersona'])->name('personasExcel.download');
