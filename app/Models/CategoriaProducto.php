<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    use HasFactory;

    protected $table = 'categoria_productos'; 
    protected $fillable = ['id','nombre', 'estado' ];

    //relacion uno a muchos
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }


}
