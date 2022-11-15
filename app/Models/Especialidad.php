<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $table = 'especialidads'; 
    protected $fillable = ['id','nombre', 'estado' ];


    //relacion uno a muchos
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }


}
