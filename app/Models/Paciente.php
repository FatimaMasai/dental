<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'pacientes';

    protected $fillable = [
        'id',
        'alergia',
        'observacion',
        'recomendado',
        'responsable',
        'antecedentes',
        'estado',
        'persona_id'     
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

}
