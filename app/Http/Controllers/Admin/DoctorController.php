<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor; 
use App\Models\Persona;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        
        return view('admin.doctores.index');
    }

    public function create()
    { 
        return view('admin.doctores.create');
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

        $doctore = Doctor::create([
            'especialidad' => $request->post('especialidad'), 
            //'estado' => $request->post('estado'),
            'persona_id' => $persona->id,
        ]);

        $doctore->save();

        return redirect()->route('doctores.index', $doctore)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {  
        $doctore = Doctor::findOrFail($id); 
    
        return view('admin.doctores.edit')->with('doctore', $doctore);
    }


    public function update(Request $request)
    { 
        $doctore = Doctor::find($request->id);
       
        $persona =  Persona::find($doctore->persona_id);


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

        $doctore->update([
            'especialidad' => $request->especialidad
        ]);

        $doctore->update($request->all());
        return redirect()->route('doctores.index')->with('actualizar', 'El Registro se actualizado'); 
    }


    public function destroy($id)
    {
      
        $doctore = Doctor::find($id);
        $doctore->update(['estado'=>2]);
        return redirect()->route('doctores.index')->with('eliminar', 'ok');
    }

    // public function exportarExcelServicio()
    // { 

    //     return Excel::download(new ServicioExportar, 'ListaServicioExcel.xlsx');
    // }
}
