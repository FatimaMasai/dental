<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Persona\PersonaStoreRequest;
use App\Http\Requests\StorePersonaRequest;
use App\Models\Persona;
use DateTime;
use Illuminate\Http\Request; 

class PersonaController extends Controller
{

    public function index()
    {
        
        return view('admin.persona.index');
    }

    public function create()
    {
        return view('admin.persona.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nombres' => 'required', 
        //     'apellido_paterno' => 'required',
        //     'apellido_materno' => 'required',
        //     'carnet_identidad' => 'required',
        //     'fecha_nac' => 'required',
        //     'sexo' => 'required',
        //     'celular' => 'required',
        //     'email' => 'required',
        // ]);
        $personas = Persona::create($request->all()); 
        return redirect()->route('personas.index', $personas)->with('guardar', 'El Registro se creó');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function agregar(Request $request)
    {
        $personas = $request->personas;
        return view('admin.personas.index', compact('personas'));
    }
 
}
