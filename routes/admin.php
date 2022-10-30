<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Homecontroller;
use App\Http\Controllers\Admin\PersonaController;

Route::get('', [Homecontroller::class, 'index']); 
Route::resource('personas', PersonaController::class)->names('personas');