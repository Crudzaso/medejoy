<?php

namespace Database\Factories;

use App\Models\Lottery;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Raffle>
 */
class RaffleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'title' => $this->faker->sentence(3), // Título de la rifa
            'description' => $this->faker->paragraph(), // Descripción larga
            'lottery_id' => Lottery::inRandomOrder()->value('id'), // Selecciona una lotería existente
            'image' => $this->faker->imageUrl(640, 480, 'raffle', true), // Imagen simulada
            'status' => $this->faker->randomElement(['active', 'inactive', 'completed', 'canceled']), // Estado
            'ticket_price' => $this->faker->randomFloat(2, 1, 100), // Precio del ticket entre 1 y 100
            'ticket_quantity' => $this->faker->numberBetween(10, 500), // Cantidad de tickets entre 10 y 500
            'sales_goal' => $this->faker->randomFloat(2, 100, 10000), // Meta de ventas entre 100 y 10,000
            'tickets_sold' => $this->faker->numberBetween(0, 500), // Tickets vendidos (máximo igual a ticket_quantity)
            'quantity_number_draws' => $this->faker->numberBetween(1, 10), // Cantidad de sorteos
            'collected' => $this->faker->randomFloat(2, 0, 5000), // Monto recaudado
            'organizer_id' => User::inRandomOrder()->value('id'), // Selecciona un usuario existente como organizador
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'), // Fecha de inicio entre el último año y ahora
            'draw_date' => $this->faker->dateTimeBetween('now', '+1 year'), // Fecha del sorteo entre ahora y el próximo año
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
