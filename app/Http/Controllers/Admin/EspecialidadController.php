<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index()
    {
        
        return view('admin.especialidades.index');
    }

    public function create()
    {
        return view('admin.especialidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',  
        ]);
        $especialidade = Especialidad::create($request->all()); 
        return redirect()->route('especialidades.index', $especialidade)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }


    public function edit(Especialidad $especialidade)
    {
        return view('admin.especialidades.edit', compact('especialidade'));
    }


    public function update(Request $request, Especialidad $especialidade)
    {
        $request->validate([
            'nombre' => 'required',  
        ]);

        $especialidade->update($request->all()); 
        return redirect()->route('especialidades.index', $especialidade)->with('actualizar', 'El Registro actualizado');
    }


    public function destroy($id)
    {
      
        $especialidade = Especialidad::find($id);
        $especialidade->update(['estado'=>2]);
        return redirect()->route('especialidades.index')->with('eliminar', 'ok');
    }


    // public function exportarExcelCategoriaServicio()
    // { 
    //     return Excel::download(new CategoriaServicioExportar, 'ListaCategoriaServicioExcel.xlsx');
    // }
}
