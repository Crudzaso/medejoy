<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lottery>
 */
class LotteryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

         $names = [
            'paisita1',
            'paisita2',
            'paisita3',
            'la antioqueñita',
            'loteria de medellin'
        ];
        return [
            'name' => $this->faker->unique()->randomElement($names),
            'description' => $this->faker->sentence(), // Descripción corta
            'image' => $this->faker->imageUrl(640, 480, 'lottery', true), // Imagen simulada
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
