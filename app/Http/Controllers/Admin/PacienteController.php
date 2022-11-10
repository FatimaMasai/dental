<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PacienteExportar;
use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PacienteController extends Controller
{
    public function index()
    {
        
        return view('admin.pacientes.index');
    }

    public function create()
    {
        return view('admin.pacientes.create');
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

        $paciente = Paciente::create([
            'alergia' => $request->post('alergia'),
            'observacion' => $request->post('observacion'),
            'recomendado' => $request->post('recomendado'),
            'responsable' => $request->post('responsable'),
            'antecedentes' => $request->post('antecedentes'),
            //'estado' => $request->post('estado'),
            'persona_id' => $persona->id,
        ]);

        $paciente->save();

        return redirect()->route('pacientes.index')->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    { 
        $paciente = Paciente::find($id);
         
        
        return view('admin.pacientes.show')->with('paciente', $paciente); 
    }


    public function edit($id)
    {  
        $paciente = Paciente::findOrFail($id); 
    
        return view('admin.pacientes.edit')->with('paciente', $paciente);
    }


    public function update(Request $request)
    { 
        $paciente = Paciente::find($request->id);
       
        $persona =  Persona::find($paciente->persona_id);


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

        $paciente->update([
            'alergia' => $request->alergia, 
            'observacion' => $request->observacion,
            'recomendado' => $request->recomendado,
            'responsable' => $request->responsable,
            'antecedentes' => $request->antecedentes, 
        ]);

        $paciente->update($request->all());
        return redirect()->route('pacientes.index')->with('actualizar', 'El Registro se actualizado'); 
    }
 


    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id); 
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('eliminar', 'ok');
    }

    public function exportarExcelPaciente()
    { 

        return Excel::download(new PacienteExportar, 'ListaPacienteExcel.xlsx');
    }
}
