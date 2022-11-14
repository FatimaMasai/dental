<?php

namespace App\Http\Controllers;

use App\Models\CategoriaServicio;
use App\Models\Paciente;
use App\Models\Persona;
use App\Models\Servicio;
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

   public function reportecategoriaServicios()
   {
      $categoriaServicios = CategoriaServicio::all();  
      $pdf = Pdf::loadView('reportes.categoriaServicio', compact('categoriaServicios'));
      return $pdf->stream('lista-categoriaServicios.pdf');

   }

   public function reporteServicios()
   {
      $servicios = Servicio::all();  
      $pdf = Pdf::loadView('reportes.servicios', compact('servicios'));
      return $pdf->stream('lista-servicios.pdf');

   }

   

   
}
