<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Persona; 
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\Node\Stmt\Return_;

class ReporteController extends Controller
{
       
   public function reportePersonas()
   {  
      $personas = Persona::all();  
      $pdf = Pdf::loadView('reportes.persona', compact('personas'));
      return $pdf->stream('lista-personas.pdf');
   }

   public function reportePacientes()
   {  
      $pacientes = Paciente::all();  
       
      $pdf = Pdf::loadView('reportes.paciente', compact('pacientes'));
      return $pdf->stream('lista-pacientes.pdf');
   }

   

   
}
