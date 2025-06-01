<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    protected $fillable = [
        'name',
    ];

    public function stories(): BelongsToMany
    {
        return $this->belongsToMany(Story::class);
    }

    public function fandom(): BelongsTo
    {
        return $this->belongsTo(Fandom::class);
    }
}
