<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salle>
 */
class SalleFactory extends Factory
{

    protected $model= Salle::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = $this->faker->dateTimeBetween('+1 days', '+1 month');
        $end = (clone $start)->modify('+2 hours');
        return [
              'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'salle_id' => Salle::inRandomOrder()->first()->id ?? Salle::factory(),
            'debut' => $start,
            'fin' => $end,
        ];
    }
}
