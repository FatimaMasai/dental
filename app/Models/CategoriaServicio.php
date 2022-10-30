<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaServicio extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }

}
