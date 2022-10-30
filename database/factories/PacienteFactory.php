<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alergia' => $this->faker->word(25),
            'observacion' => $this->faker->text(155),  
            'recomendado' => $this->faker->userName(),
            'responsable' => $this->faker->userName(),
            'antecedentes' => $this->faker->word(25),

            'estado' => $this->faker->randomElement([1,2]),
            'persona_id' => Persona::all()->random()->id,
        ];
    }
}
