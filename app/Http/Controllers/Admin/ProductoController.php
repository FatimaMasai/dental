<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriaProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        
        return view('admin.productos.index');
    }

    public function create()
    {
        $categoriaProducto = CategoriaProducto::all();
        return view('admin.productos.create')->with('categoriaProducto', $categoriaProducto);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required', 
            'descripcion' => 'required', 
        ]);
        $producto = Producto::create($request->all()); 
        return redirect()->route('productos.index', $producto)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }

    public function edit(Producto $producto)
    {
        $categoriaProducto = CategoriaProducto::pluck('nombre', 'id'); 
         
        return view('admin.productos.edit', compact('producto', 'categoriaProducto'));
    }

 

    public function update(Request $request,  Producto $producto)
    { 
        $producto->update($request->all()); 
        return redirect()->route('productos.index', $producto)->with('actualizar', 'El Registro se actualizado');  
    }


    public function destroy($id)
    {
      
        $producto = Producto::find($id);
        $producto->update(['estado'=>2]);
        return redirect()->route('productos.index')->with('eliminar', 'ok');
    }

    // public function exportarExcelServicio()
    // { 

    //     return Excel::download(new ServicioExportar, 'ListaServicioExcel.xlsx');
    // }
}
