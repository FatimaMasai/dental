<?php

namespace App\Http\Livewire\Persona;

use App\Models\Persona;
use Livewire\Component;

class PersonaTable extends Component
{
    public function render()
    {
        $personas = Persona::all();
        return view('livewire.persona.persona-table', compact('personas'));
    }
}
