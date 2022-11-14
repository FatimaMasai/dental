<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CategoriaServicioExportar;
use App\Http\Controllers\Controller;
use App\Models\CategoriaServicio;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CategoriaServicioController extends Controller
{
    public function index()
    {
        
        return view('admin.categoriaServicios.index');
    }

    public function create()
    {
        return view('admin.categoriaServicios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',  
        ]);
        $categoriaServicio = CategoriaServicio::create($request->all()); 
        return redirect()->route('categoriaServicio.index', $categoriaServicio)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }


    public function edit(CategoriaServicio $categoriaServicio)
    {
        return view('admin.categoriaServicios.edit', compact('categoriaServicio'));
    }


    public function update(Request $request, CategoriaServicio $categoriaServicio)
    {
        $request->validate([
            'nombre' => 'required',  
        ]);

        $categoriaServicio->update($request->all()); 
        return redirect()->route('categoriaServicio.index', $categoriaServicio)->with('actualizar', 'El Registro actualizado');
    }


    public function destroy($id)
    {
      
        $categoriaServicio = CategoriaServicio::find($id);
        $categoriaServicio->update(['estado'=>2]);
        return redirect()->route('categoriaServicio.index')->with('eliminar', 'ok');
    }


    public function exportarExcelCategoriaServicio()
    { 
        return Excel::download(new CategoriaServicioExportar, 'ListaCategoriaServicioExcel.xlsx');
    }

    
}
