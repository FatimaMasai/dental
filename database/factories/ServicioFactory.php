<?php

namespace Database\Factories;

use App\Models\CategoriaServicio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
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
            'monto' => $this->faker->randomFloat('2', 1000,2),
            'estado' => $this->faker->randomElement([1,2]),
            'categoria_servicios_id' => CategoriaServicio::all()->random()->id,
        ];
    }
}
