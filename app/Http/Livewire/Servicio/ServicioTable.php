<?php

namespace App\Http\Livewire\Servicio;

use App\Models\Servicio; 
use Livewire\Component;
use Livewire\WithPagination;

class ServicioTable extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $servicios = Servicio::where('nombre', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC') 
        ->paginate(10);
        return view('livewire.servicio.servicio-table', compact('servicios'));
    }
}
