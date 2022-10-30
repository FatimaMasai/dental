<?php

namespace Database\Factories;

use App\Models\CategoriaProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(15),
            'descripcion' => $this->faker->text(155),  
            'estado' => $this->faker->randomElement([1,2]),
            'categoria_productos_id' => CategoriaProducto::all()->random()->id,
        ];
    }
}
