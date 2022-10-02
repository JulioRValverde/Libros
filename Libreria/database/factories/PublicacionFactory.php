<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicacion>
 */
class PublicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' =>fake()->sentence(),
            'resumen'=>fake()->paragraph(),
            'palabras_claves'=>fake()->sentence(),
            'estado_id'=>fake()->numberBetween(1,5),
            'user_id'=>fake()->numberBetween(1,11),
            'categoria_id'=>fake()->numberBetween(1,4),
            'genero_id'=>fake()->numberBetween(1,6),
        ];
    }
}
