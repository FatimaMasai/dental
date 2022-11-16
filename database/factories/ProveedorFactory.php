<?php

namespace Database\Factories;

use App\Models\Empresa;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{ 
    public function definition()
    {
        return [
            'empresa' => $this->faker->word(25),
            'nit' => $this->faker->randomNumber(9, true), 

            'estado' => $this->faker->randomElement([1,2]),
            'persona_id' => Persona::all()->random()->id,
            // 'empresa_id' => Empresa::all()->random()->id,
        ];
    }
}
