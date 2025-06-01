<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Story extends Model
{
    protected $fillable = [
        'type',
        'name',
        'description',
        'status',
        'direction',
        'rating',
        'size',
        'cover',
    ];

    public function fandom(): BelongsTo
    {
        return $this->belongsTo(Fandom::class);
    }
}
