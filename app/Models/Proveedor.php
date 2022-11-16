<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedors';

    protected $fillable = [
        'id',
        'empresa',
        'nit', 
        'estado',
        'persona_id'     
    ];


    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

     //relacion uno a mucho inversa

     public function empresas()
     {
         return $this->belongsTo(Empresa::class);
     }

     


}
