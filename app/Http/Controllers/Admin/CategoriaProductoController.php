<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriaProducto;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    public function index()
    {
        
        return view('admin.categoriaProductos.index');
    }

    public function create()
    {
        return view('admin.categoriaProductos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',  
        ]);
        $categoriaProducto = CategoriaProducto::create($request->all()); 
        return redirect()->route('categoriaProductos.index', $categoriaProducto)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }


    public function edit(CategoriaProducto $categoriaProducto)
    {
        return view('admin.categoriaProductos.edit', compact('categoriaProducto'));
    }


    public function update(Request $request, CategoriaProducto $categoriaProducto)
    {
        $request->validate([
            'nombre' => 'required',  
        ]);

        $categoriaProducto->update($request->all()); 
        return redirect()->route('categoriaProductos.index', $categoriaProducto)->with('actualizar', 'El Registro actualizado');
    }


    public function destroy($id)
    {
      
        $categoriaProducto = CategoriaProducto::find($id);
        $categoriaProducto->update(['estado'=>2]);
        return redirect()->route('categoriaProductos.index')->with('eliminar', 'ok');
    }
}
