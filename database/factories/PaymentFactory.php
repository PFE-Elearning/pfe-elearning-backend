<?php

namespace Database\Factories;

use App\Models\Formation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => fake()->randomElement([1, 22, 11,5, 23, 19 ,12 ,15]),
            'formation_id' => fake()->randomElement(Formation::all('id')),
            'user_id' => fake()->randomElement(User::all('id')),
        ];
    }
}
