<?php

namespace App\Enums;

enum StoryDirection: string
{
    case GET = 'get';
    case GEN = 'gen';
    case SLASH = 'slash';

    public function label(): string
    {
        return match ($this) {
            self::GET => __('texts.story.direction.get'),
            self::GEN => __('texts.story.direction.gen'),
            self::SLASH => __('texts.story.direction.slash'),
        };
    }
}
