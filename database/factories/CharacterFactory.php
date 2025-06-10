<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Fandom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Character>
 */
class CharacterFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'fandom_id' => $this->faker->optional(0.6)->randomElement(
                Fandom::query()
                    ->pluck('id')
                    ->toArray(),
            ),
        ];
    }

    /**
     * Create character with fandom
     * @return Factory
     */
    public function withFandom(): Factory
    {
        return $this->state([
            'fandom_id' => Fandom::query()
                ->inRandomOrder()
                ->value('id'),
        ]);
    }

    /**
     * Create character without fandom
     * @return Factory
     */
    public function withoutFandom(): Factory
    {
        return $this->state([
            'fandom_id' => null,
        ]);
    }
}
