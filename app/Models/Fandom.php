<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fandom extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function stories(): HasMany
    {
        return $this->hasMany(Story::class);
    }

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}
