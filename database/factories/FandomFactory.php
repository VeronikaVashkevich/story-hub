<?php

namespace Database\Factories;

use App\Models\Fandom;
use Illuminate\Database\Eloquent\Factories\Factory;

class FandomFactory extends Factory
{
    protected $model = Fandom::class;

    public function definition(): array
    {
        return [
            'name' => ucfirst(fake()->words(3, true)),
            'description' => fake()->paragraphs(2, true),
        ];
    }
}
