<?php

namespace App\Enums;

enum StoryType: string
{
    case ORIGINAL = 'orig';
    case FANFIC = 'ffic';

    public function label(): string
    {
        return match ($this) {
            self::ORIGINAL => __('texts.story.type.orig'),
            self::FANFIC => __('texts.story.type.ffic'),
        };
    }
}
