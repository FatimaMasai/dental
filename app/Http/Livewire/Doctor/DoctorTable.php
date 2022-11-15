<?php

namespace App\Http\Livewire\Doctor;

use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class DoctorTable extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;     
    public function updatingSearch(){
        $this->resetPage();

    }


    public function render()
    {
        $doctores = DB::table('personas as p')
        ->join('doctors as doc', 'doc.persona_id' , '=', 'p.id') 
        ->select('p.id as persona_id',
        'p.nombres',
        'p.apellido_paterno', 'p.apellido_materno',
        'p.carnet_identidad',
        'p.fecha_nac',
        'p.sexo',
        'p.celular',
        'p.email',
        'doc.estado',
        'doc.id',
        'doc.especialidad' )
        ->where('p.nombres', 'like', '%' . $this->search . '%')
        ->orWhere('p.apellido_paterno', 'like', '%' . $this->search . '%')
        ->orWhere('p.apellido_materno', 'like', '%' . $this->search . '%')
        ->orderBy('doc.id', 'DESC') 
        ->distinct()
        ->paginate(10);
        return view('livewire.doctor.doctor-table', compact('doctores'));
    }
}
