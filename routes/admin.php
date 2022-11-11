<?php

use App\Http\Controllers\Admin\CategoriaServicioController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PacienteController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\ReporteController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('', [HomeController::class, 'index'])->name('admin.home');; 
//php artisan r:l --name=pacientes
Route::resource('personas', PersonaController::class)->names('personas');
Route::resource('pacientes', PacienteController::class)->names('pacientes');
Route::resource('categoriaServicio', CategoriaServicioController::class)->names('categoriaServicio');



//REPORTES 
//admin/ el admin se coloca en el blade en la url
Route::get('reportes/personas', [ReporteController::class, 'reportePersonas'])->name('personas.download');
Route::get('reportes/pacientes', [ReporteController::class, 'reportePacientes'])->name('pacientes.download');

//EXPORTAR EXCEL
Route::get('excel/personas', [PersonaController::class, 'exportarExcelPersona'])->name('personasExcel.download');
Route::get('excel/pacientes', [PacienteController::class, 'exportarExcelPaciente'])->name('pacienteExcel.download');
