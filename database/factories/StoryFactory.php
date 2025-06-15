<?php

namespace Database\Factories;

use App\Enums\Direction;
use App\Enums\Rating;
use App\Enums\StorySize;
use App\Enums\StoryStatus;
use App\Enums\StoryType;
use App\Models\Character;
use App\Models\Fandom;
use App\Models\Story;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Story>
 */
class StoryFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement([StoryType::ORIGINAL, StoryType::FANFIC]);
        $user = User::query()->inRandomOrder()->first() ?? User::factory()->create();

        return [
            'user_id' => User::factory(),
            'fandom_id' => $type === StoryType::FANFIC ? Fandom::factory() : null,
            'type' => $type,
            'name' => $this->faker->sentence($this->faker->numberBetween(1, 3)),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(StoryStatus::cases())->value,
            'direction' => $this->faker->randomElement(Direction::cases())->value,
            'rating' => $this->faker->randomElement(Rating::cases())->value,
            'size' => $this->faker->randomElement(StorySize::cases())->value,
            'cover' => $this->faker->optional()->imageUrl(),
        ];
    }

    public function configure(): Factory
    {
        return $this->afterCreating(function (Story $story) {
            $tags = Tag::factory()
                ->count($this->faker->numberBetween(1, 5))
                ->create();

            $story->tags()->attach($tags);

            if ($story->type === StoryType::ORIGINAL) {
                // For original stories, create characters that belong only to this story
                $character = Character::factory()
                    ->count($this->faker->numberBetween(1, 5))
                    ->create([
                        'fandom_id' => null,
                    ]);

                $story->characters()->attach($character);
            } else {
                // For fanfics, create characters that belong to the story's fandom
                $characters = Character::factory()
                    ->count($this->faker->numberBetween(1, 5))
                    ->create([
                        'fandom_id' => $story->fandom_id,
                    ]);

                $story->characters()->attach($characters);
            }
        });
    }
}
