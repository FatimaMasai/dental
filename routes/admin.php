<?php

use App\Http\Controllers\Admin\CategoriaServicioController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PacienteController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\Admin\ServicioController; 
use App\Http\Controllers\ReporteController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('', [HomeController::class, 'index'])->name('admin.home');

//php artisan r:l --name=servicios
Route::resource('personas', PersonaController::class)->names('personas');
Route::resource('pacientes', PacienteController::class)->names('pacientes');
Route::resource('categoriaServicio', CategoriaServicioController::class)->names('categoriaServicio');
Route::resource('servicios', ServicioController::class)->names('servicios');

//REPORTES 
//admin/ el admin se coloca en el blade en la url
Route::get('reportes/personas', [ReporteController::class, 'reportePersonas'])->name('personas.download');
Route::get('reportes/pacientes', [ReporteController::class, 'reportePacientes'])->name('pacientes.download');
Route::get('reportes/categoriaServicios', [ReporteController::class, 'reportecategoriaServicios'])->name('categoriaServicios.download');
Route::get('reportes/servicios', [ReporteController::class, 'reporteServicios'])->name('servicios.download');

//EXPORTAR EXCEL 
//php artisan make:export ServicioExportar --model=Servicio
Route::get('excel/personas', [PersonaController::class, 'exportarExcelPersona'])->name('personasExcel.download');
Route::get('excel/pacientes', [PacienteController::class, 'exportarExcelPaciente'])->name('pacienteExcel.download');
Route::get('excel/categoriaServicios', [CategoriaServicioController::class, 'exportarExcelCategoriaServicio'])->name('categoriaServiciosExcel.download');
Route::get('excel/servicios', [ServicioController::class, 'exportarExcelServicio'])->name('serviciosExcel.download');