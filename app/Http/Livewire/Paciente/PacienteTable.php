<?php

namespace App\Http\Livewire\Paciente;

use Livewire\Component; 
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class PacienteTable extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }

    public function render()
    {

        $pacientes = DB::table('personas as p')
        ->join('pacientes as pac', 'pac.persona_id' , '=', 'p.id')
        ->select('p.id',
        'p.nombres',
        'p.apellido_paterno', 'p.apellido_materno',
        'p.carnet_identidad',
        'p.fecha_nac',
        'p.sexo',
        'p.celular',
        'p.email',
        'pac.estado',
        'pac.id',
        'pac.alergia',
        'pac.observacion',
        'pac.recomendado',
        'pac.responsable',
        'pac.antecedentes')
        ->where('p.nombres', 'like', '%' . $this->search . '%')
        ->orWhere('p.apellido_paterno', 'like', '%' . $this->search . '%')
        ->orWhere('p.apellido_materno', 'like', '%' . $this->search . '%')
        ->orderBy('pac.id', 'DESC') 
        ->distinct()
        ->paginate(10); 
         

        return view('livewire.paciente.paciente-table', compact('pacientes'));
    }
}
