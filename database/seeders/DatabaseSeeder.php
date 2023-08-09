<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Adoption;
use App\Models\Pet;
use App\Models\Shelter;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Shelter::factory(5)->create();

        for ($i =0 ; $i < 6; $i++) {
            // dogs
            Pet::factory()->create([
                'species' => 'dog',
                'breed' => fake()->randomElement(['shih tzu', 'siberian husky', 'poodle', 'maltese']),
                'size' => fake()->randomElement(['small', 'medium', 'large', 'giant'])
            ]);

            // cat
            Pet::factory()->create([
                'species' => 'cat',
                'breed' => fake()->randomElement(['siamese', 'ragdoll', 'persian']),
                'size' => fake()->randomElement(['small', 'medium', 'large'])
            ]);
    
            // bird
            Pet::factory()->create([
                'species' => 'bird',
                'breed' => fake()->randomElement(['silkie', 'parrot', 'crow']),
                'size' => fake()->randomElement(['small', 'medium', 'large'])
            ]);

        }

        Adoption::factory(1)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
