<?php

namespace App\Enums;

enum StoryStatus: string
{
    case IN_PROGRESS = 'ip';
    case COMPLETED = 'cp';
    case FROZEN = 'fz';

    public function label(): string
    {
        return match ($this) {
            self::IN_PROGRESS => __('texts.story.status.ip'),
            self::COMPLETED => __('texts.story.status.cp'),
            self::FROZEN => __('texts.story.status.fz'),
        };
    }
}
