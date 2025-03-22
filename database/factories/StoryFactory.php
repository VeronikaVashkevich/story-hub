<?php

namespace Database\Factories;

use App\Constants\StoryDirection;
use App\Constants\StoryRating;
use App\Constants\StorySize;
use App\Constants\StoryStatus;
use App\Models\Character;
use App\Models\Fandom;
use App\Models\Story;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        $fandom = Fandom::inRandomOrder()->first() ?? Fandom::factory()->create();
        $characters = Character::where('fandom_id', $fandom->id)->inRandomOrder()->limit(3)->get();

        if ($characters->isEmpty()) {
            Character::factory(3)->create(['fandom_id' => $fandom->id]);
        }

        return [
            'name' => fake()->words(4, true),
            'description' => fake()->paragraph(),
            'status' => fake()->randomElement([
                StoryStatus::COMPLETED,
                StoryStatus::IN_PROCESS,
                StoryStatus::FROZEN,
            ]),
            'direction' => fake()->randomElement([
                StoryDirection::GET,
                StoryDirection::GEN,
                StoryDirection::SLASH,
            ]),
            'rating' => fake()->randomElement([
                StoryRating::RATING_G,
                StoryRating::RATING_PG12,
                StoryRating::RATING_PG16,
                StoryRating::RATING_PG18,
            ]),
            'pages' => 1,
            'size' => fake()->randomElement([
                StorySize::MINI,
                StorySize::MIDI,
                StorySize::MAXI,
            ]),
            'user_id' => $user->id,
            'fandom_id' => $fandom->id,
        ];
    }

    public function configure(): Factory|StoryFactory
    {
        return $this->afterCreating(function (Story $story) {
            $tags = Tag::inRandomOrder()->limit(3)->get();

            if ($tags->isEmpty()) {
                $tags = Tag::factory(3)->create();
            }

            $story->tags()->attach($tags);

            $characters = Character::where('fandom_id', $story->fandom_id)->inRandomOrder()->limit(3)->get();

            if ($characters->isEmpty()) {
                $characters = Character::factory(3)->create(['fandom_id' => $story->fandom_id]);
            }

            $story->characters()->attach($characters);
        });
    }
}
