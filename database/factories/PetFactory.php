<?php

namespace Database\Factories;

use App\Models\Pet;
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
            'species' => fake()->realText(),
            'name' => fake()->firstName(),
            'breed' => fake()->realText(),
            'birthday' => fake()->dateTimeThisYear(),
            'gender' => fake()->realText(),
            'size' => fake()->realText(),
            'description' => fake()->realText(),
            'availability_status' => fake()->realText(),
            'image' => fake()->imageUrl(),
            'shelter_id' => Shelter::factory()
        ];
    }
}
