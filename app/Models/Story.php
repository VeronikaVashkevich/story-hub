<?php

namespace App\Models;

use App\Enums\StoryDirection;
use App\Enums\StoryRating;
use App\Enums\StorySize;
use App\Enums\StoryStatus;
use App\Enums\StoryType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Story extends Model
{
    use HasFactory;

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

    protected $casts = [
        'direction' => StoryDirection::class,
        'status' => StoryStatus::class,
        'type' => StoryType::class,
        'rating' => StoryRating::class,
        'size' => StorySize::class,
    ];

    public function fandom(): BelongsTo
    {
        return $this->belongsTo(Fandom::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
