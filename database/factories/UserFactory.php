<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formation;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'avatar' => "profile.png",
            'role' => fake()->randomElement(['student','formateur','admin']),
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'avatar' => "profile.png",
            'role' => fake()->randomElement(['student','formateur','admin']),
            'email' => fake()->unique()->safeEmail(),
            'password' => '12345678', // password
            'password' => '12345678', // password
            'remember_token' => Str::random(10),
            'formation_id' => fake()->randomElement(Formation::all('id')),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
