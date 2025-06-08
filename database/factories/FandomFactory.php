<?php

namespace Database\Factories;

use App\Models\Fandom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fandom>
 */
class FandomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst(fake()->words(3, true)),
            'description' => fake()->paragraphs(2, true),
        ];
    }
}
