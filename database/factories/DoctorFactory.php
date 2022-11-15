<?php

namespace Database\Factories;
 
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
   
    public function definition()
    {
        return [ 
            'especialidad' => $this->faker->word(15), 
            'estado' => $this->faker->randomElement([1,2]),
            // 'especialidads_id' => Especialidad::all()->random()->id,
            'persona_id' => Persona::all()->random()->id,
        ];
    }
}
