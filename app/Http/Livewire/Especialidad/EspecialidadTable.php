<?php

namespace App\Http\Livewire\Especialidad;

use App\Models\Especialidad;
use Livewire\Component;
use Livewire\WithPagination;


class EspecialidadTable extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $especialidades = Especialidad::where('nombre', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC') 
        ->paginate(10);
        return view('livewire.especialidad.especialidad-table', compact('especialidades'));
    }
}
