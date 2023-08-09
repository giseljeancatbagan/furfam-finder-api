<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adoption>
 */
class AdoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => Pet::factory(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'contact_info' => '09' . fake()->randomNumber(9, true),
            'adoption_date' => fake()->dateTimeThisYear()
        ];
    }
}
