<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Admin\PersonaController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');; 
Route::resource('personas', PersonaController::class)->names('personas');