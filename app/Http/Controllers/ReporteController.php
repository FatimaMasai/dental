<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request; 
use Barryvdh\DomPDF\Facade\Pdf; 
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
       
   public function reportePersonas()
   { 
      //$nacimiento =[];
      // $nacimiento = DB::table('personas')->select('fecha_nac')->get();
      // dd($nacimiento);
      
      // $actual = Carbon::now();
      // $ahora = Carbon::parse($nacimiento['fecha_nac']);

      // dd($ahora);

        $personas = Persona::all();  
        $pdf = Pdf::loadView('reportes.persona', compact('personas'));
        return $pdf->stream('lista-personas.pdf');
   }

   
}
