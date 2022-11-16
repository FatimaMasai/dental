<?php

namespace App\Http\Livewire\Proveedor;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ProveedorTable extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {
        $proveedores = DB::table('personas as p')
        ->join('proveedors as prov', 'prov.persona_id' , '=', 'p.id') 
        ->select('p.id as persona_id',
        'p.nombres',
        'p.apellido_paterno', 'p.apellido_materno',
        'p.carnet_identidad',
        'p.fecha_nac',
        'p.sexo',
        'p.celular',
        'p.email',
        'prov.estado',
        'prov.id',
        'prov.empresa',
        'prov.nit' )
        ->where('p.nombres', 'like', '%' . $this->search . '%')
        ->orWhere('p.apellido_paterno', 'like', '%' . $this->search . '%')
        ->orWhere('p.apellido_materno', 'like', '%' . $this->search . '%')
        ->orderBy('prov.id', 'DESC') 
        ->distinct()
        ->paginate(10);
        return view('livewire.proveedor.proveedor-table', compact('proveedores'));
    }
}
