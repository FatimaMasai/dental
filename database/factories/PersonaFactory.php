<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
     
    public function definition()
    {
        return [
           'nombres' => $this->faker->userName(),
           'apellido_paterno' => $this->faker->firstName(),
           'apellido_materno' => $this->faker->lastName(),
           'carnet_identidad' => $this->faker->unique()->randomNumber(8, true),
           'fecha_nac' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
           'sexo' => $this->faker->randomElement(['Hombre', 'Mujer']),
           'celular' => $this->faker->phoneNumber(),
           'email' => $this->faker->unique()->safeEmail(),
           'estado' => $this->faker->randomElement([1,2]), 
        ];
    }
} 