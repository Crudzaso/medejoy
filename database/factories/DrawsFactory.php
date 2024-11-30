<?php

namespace Database\Factories;

use App\Models\Lottery;
use App\Models\Raffle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Draws>
 */
class DrawsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'raffle_id'=> Raffle::inRandomOrder()->value('id'),
        'lottery_id' => Lottery::inRandomOrder()->value('id'),
        'winning_number' => $this->faker->numberBetween(1,1000),
        'draw_date' => $this->faker->dateTimeBetween('now','+1 month'),
        'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
        'created_at' => now(),
        'updated_at' => now(), 
        ];
    }
}
