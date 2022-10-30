<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    //relacion uno a mucho inversa

    public function categoriaServicio()
    {
        return $this->belongsTo(CategoriaServicio::class);
    }

}
