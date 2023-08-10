<?php

namespace Database\Factories;

use App\Models\Shelter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'species' => fake()->randomElement(['dog', 'cat', 'bird', 'others']),
            'name' => fake()->firstName(),
            'breed' => fake()->randomElement(['shih tzu', 'siberian husky', 'poodle', 'maltese', 'siamese', 'ragdoll', 'persian', 'silkie', 'parrot']),
            'birthday' => fake()->dateTimeThisYear(),
            'gender' => fake()->randomElement(['male', 'female']),
            'size' => fake()->randomElement(['small', 'medium', 'large', 'giant']),
            'description' => fake()->realText(),
            'availability_status' => fake()->randomElement(['available', 'pending', 'adopted']),
            'image' => fake()->imageUrl(),
            'shelter_id' => Shelter::factory()
        ];
    }
}
