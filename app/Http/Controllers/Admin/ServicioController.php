<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ServicioExportar;
use App\Http\Controllers\Controller;
use App\Models\CategoriaServicio;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;

class ServicioController extends Controller
{
    public function index()
    {
        
        return view('admin.servicios.index');
    }

    public function create()
    {
        $categoriaServicio = CategoriaServicio::all();
        return view('admin.servicios.create')->with('categoriaServicio', $categoriaServicio);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required', 
            'monto' => 'required', 
        ]);
        $servicio = Servicio::create($request->all()); 
        return redirect()->route('servicios.index', $servicio)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }

    public function edit(Servicio $servicio)
    {
        $categoriaServicio = CategoriaServicio::pluck('nombre', 'id'); 
         
        return view('admin.servicios.edit', compact('servicio', 'categoriaServicio'));
    }

 

    public function update(Request $request,  Servicio $servicio)
    { 
        $servicio->update($request->all()); 
        return redirect()->route('servicios.index', $servicio)->with('actualizar', 'El Registro se actualizado');  
    }


    public function destroy($id)
    {
      
        $servicio = Servicio::find($id);
        $servicio->update(['estado'=>2]);
        return redirect()->route('servicios.index')->with('eliminar', 'ok');
    }

    public function exportarExcelServicio()
    { 

        return Excel::download(new ServicioExportar, 'ListaServicioExcel.xlsx');
    }
}
