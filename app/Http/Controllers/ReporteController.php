<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request; 
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
       
   public function reportePersonas()
   { 
        $personas = Persona::all();  
        $pdf = Pdf::loadView('reportes.persona', compact('personas'));
        return $pdf->stream('lista-personas.pdf');
   }

   
}
