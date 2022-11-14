<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";
    protected $fillable = ['id','nombre','descripcion','estado','categoria_productos_id'];


    //relacion uno a mucho inversa

    public function categoriaProducto()
    {
        return $this->belongsTo(CategoriaProducto::class);
    }

}
