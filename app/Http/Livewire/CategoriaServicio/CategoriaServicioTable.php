<?php

namespace App\Http\Livewire\CategoriaServicio;

use App\Models\CategoriaServicio;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriaServicioTable extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $categoriaServicio = CategoriaServicio::where('nombre', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC') 
        ->paginate(10);
        return view('livewire.categoria-servicio.categoria-servicio-table', compact('categoriaServicio'));
    }
}
