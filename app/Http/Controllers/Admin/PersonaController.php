<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Persona\PersonaStoreRequest;
use App\Models\Persona;
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
        // ]);
        $personas = Persona::create($request->all());
        Alert('Éxito', 'La Tipo de Producto se ha guardado', 'success')->showConfirmButton();
        return redirect()->route('personas.index', $personas);
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
