<?php

namespace App\Enums;

enum StorySize: string
{
    case MINI = 'mini';
    case MIDI = 'midi';
    case MAXI = 'maxi';

    public function label(): string
    {
        return match ($this) {
            self::MINI => __('texts.story.size.mini'),
            self::MIDI => __('texts.story.size.midi'),
            self::MAXI => __('texts.story.size.maxi'),
        };
    }
}
