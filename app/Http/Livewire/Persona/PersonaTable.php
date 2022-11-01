<?php

namespace App\Http\Livewire\Persona;

use App\Models\Persona;
use Livewire\Component;

class PersonaTable extends Component
{

    public $search;   

    public function render()
    {
        $personas = Persona::where('nombres', 'like', '%' . $this->search . '%')
        ->orWhere('apellido_paterno', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC')
        ->get();


        return view('livewire.persona.persona-table', compact('personas'));
    }

    
}
