<?php

namespace App\Http\Livewire\CategoriaProducto;

use App\Models\CategoriaProducto;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriaProductoTable extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $categoriaProducto = CategoriaProducto::where('nombre', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC') 
        ->paginate(10);

        return view('livewire.categoria-producto.categoria-producto-table', compact('categoriaProducto'));
    }
}
