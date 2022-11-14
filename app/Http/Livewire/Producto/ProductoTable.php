<?php

namespace App\Http\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;
class ProductoTable extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $productos = Producto::where('nombre', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC') 
        ->paginate(10);

        return view('livewire.producto.producto-table', compact('productos'));
    }
}
