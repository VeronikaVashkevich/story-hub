<?php

namespace App\Enums;

enum StoryRating: string
{
    case G = 'g';
    case PG_12 = 'pg12';
    case PG_16 = 'pg16';
    case PG_18 = 'pg18';
    case NC_18 = 'nc18';
    case NC_21 = 'nc21';

    public function label(): string
    {
        return match ($this) {
            self::G => __('texts.story.rating.g'),
            self::PG_12 => __('texts.story.rating.pg12'),
            self::PG_16 => __('texts.story.rating.pg16'),
            self::PG_18 => __('texts.story.rating.pg18'),
            self::NC_18 => __('texts.story.rating.nc18'),
            self::NC_21 => __('texts.story.rating.nc21'),
        };
    }
}
