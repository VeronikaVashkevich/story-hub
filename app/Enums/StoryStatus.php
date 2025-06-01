<?php

namespace App\Enums;

enum StoryStatus: string
{
    case IN_PROGRESS = 'ip';
    case COMPLETED = 'cp';
    case FROZEN = 'fz';
}
