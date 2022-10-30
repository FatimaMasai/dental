<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }


}
