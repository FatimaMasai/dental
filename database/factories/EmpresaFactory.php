<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

 
class EmpresaFactory extends Factory
{
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(15), 
            'estado' => $this->faker->randomElement([1,2]),
        ];
    }
}
