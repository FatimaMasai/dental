<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        
        return view('admin.proveedores.index');
    }

    public function create()
    { 
        return view('admin.proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required', 
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'carnet_identidad' => 'required',
            'fecha_nac' => 'required',
            'sexo' => 'required',
            'celular' => 'required',
            'email' => 'required|unique:personas'
        ]);
        
        $persona = Persona::create([
            'nombres' => $request->post('nombres'), 
            'apellido_paterno' => $request->post('apellido_paterno'),
            'apellido_materno' => $request->post('apellido_materno'),
            'carnet_identidad' => $request->post('carnet_identidad'),
            'fecha_nac' => $request->post('fecha_nac'),
            'sexo' => $request->post('sexo'),
            'celular' => $request->post('celular'),
            'email' => $request->post('email')
        ]); 
        $persona->save(); 

        $proveedore = Proveedor::create([
            'empresa' => $request->post('empresa'), 
            'nit' => $request->post('nit'), 
            //'estado' => $request->post('estado'),
            'persona_id' => $persona->id,
        ]);

        $proveedore->save();

        return redirect()->route('proveedores.index', $proveedore)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {  
        $proveedore = Proveedor::findOrFail($id); 
    
        return view('admin.proveedores.edit')->with('proveedore', $proveedore);
    }


    public function update(Request $request)
    { 
        $proveedore = Proveedor::find($request->id);
       
        $persona =  Persona::find($proveedore->persona_id);


        $persona->update([
            'nombres' => $request->nombres,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'carnet_identidad' => $request->carnet_identidad,
            'fecha_nac' => $request->fecha_nac,
            'sexo' => $request->sexo,
            'celular' => $request->celular,
            'email' => $request->email,
        ]);

        $persona->save();

        $proveedore->update([
            'empresa' => $request->empresa,
            'nit' => $request->nit
        ]);

        $proveedore->update($request->all());
        return redirect()->route('proveedores.index')->with('actualizar', 'El Registro se actualizado'); 
    }


    public function destroy($id)
    {
      
        $proveedore = Proveedor::find($id);
        $proveedore->update(['estado'=>2]);
        return redirect()->route('proveedores.index')->with('eliminar', 'ok');
    }
}
