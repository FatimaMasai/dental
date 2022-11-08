<?php

namespace App\Http\Livewire\Persona;

use App\Models\Persona;
use Livewire\Component; 
use Livewire\WithPagination;

class PersonaTable extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $personas = Persona::where('nombres', 'like', '%' . $this->search . '%')
        ->orWhere('apellido_paterno', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC') 
        ->paginate(10);


        return view('livewire.persona.persona-table', compact('personas'));
    }

    
}
