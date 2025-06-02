<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fandom extends Model
{
    use HasFactory;

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
