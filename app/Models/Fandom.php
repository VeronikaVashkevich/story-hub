<?php

namespace App\Models;

use Database\Factories\FandomFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fandom extends Model
{
    /** @use HasFactory<FandomFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * @return HasMany<Story, $this>
     */
    public function stories(): HasMany
    {
        return $this->hasMany(Story::class);
    }

    /**
     * @return HasMany<Character, $this>
     */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}
