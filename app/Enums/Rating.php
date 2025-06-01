<?php

namespace App\Enums;

enum Rating: string
{
    case G = 'g';
    case PG_12 = 'pg12';
    case PG_16 = 'pg16';
    case PG_18 = 'pg18';
    case NC_18 = 'nc18';
    case NC_21 = 'nc21';
}
