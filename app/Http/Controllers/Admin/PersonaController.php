<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PersonaExportar;
use App\Http\Controllers\Controller; 
use App\Models\Persona; 
use Illuminate\Http\Request; 
use Maatwebsite\Excel\Facades\Excel;
 

class PersonaController extends Controller
{

    public function index()
    {
        
        return view('admin.personas.index');
    }

    public function create()
    {
        return view('admin.personas.create');
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
        $persona = Persona::create($request->all()); 
        return redirect()->route('personas.index', $persona)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }


    public function edit(Persona $persona)
    {
        return view('admin.personas.edit', compact('persona'));
    }


    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombres' => 'required', 
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'carnet_identidad' => 'required',
            'fecha_nac' => 'required',
            'sexo' => 'required',
            'celular' => 'required',
            'email' => "required|unique:personas,email,$persona->id"
        ]);

        $persona->update($request->all()); 
        return redirect()->route('personas.index', $persona)->with('actualizar', 'El Registro actualizado');
    }


    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('eliminar', 'ok');
    }

    public function exportarExcelPersona()
    { 

        return Excel::download(new PersonaExportar, 'ListaPersonaExcel.xlsx');
    }

 
}
