<?php

namespace App\View\Components\Stories;

use App\Enums\StoryDirection;
use App\Enums\StoryRating;
use App\Enums\StorySize;
use App\Enums\StoryStatus;
use App\Enums\StoryType;
use App\Models\Character;
use App\Models\Fandom;
use App\Models\Tag;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Story extends Component
{
    /**
     * @param StoryType $type
     * @param string $name
     * @param string $description
     * @param StoryStatus $status
     * @param StoryDirection $direction
     * @param StoryRating $rating
     * @param StorySize $size
     * @param string|null $cover
     * @param Fandom|null $fandom
     * @param Collection<int, Tag> $tags
     * @param Collection<int, Character> $characters
     * @param User $author
     */
    public function __construct(
        public StoryType $type,
        public string $name,
        public string $description,
        public StoryStatus $status,
        public StoryDirection $direction,
        public StoryRating $rating,
        public StorySize $size,
        public ?string $cover,
        public ?Fandom $fandom,
        public Collection $tags,
        public Collection $characters,
        public User $author,
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.stories.story');
    }
}
