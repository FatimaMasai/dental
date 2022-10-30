<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

     //relacion uno a mucho inversa

     public function especialidad()
     {
         return $this->belongsTo(Especialidad::class);
     }
 





}
