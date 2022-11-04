<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombres', 'apellido_paterno', 'apellido_materno','carnet_identidad','fecha_nac','sexo', 'celular', 'email'];

    //protected $guarded=['id'];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function proveedor()
    {
        return $this->hasOne(Proveedor::class);
    }


}

