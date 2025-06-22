<?php

namespace App\Models;

use App\Enums\StoryDirection;
use App\Enums\StoryRating;
use App\Enums\StorySize;
use App\Enums\StoryStatus;
use App\Enums\StoryType;
use Database\Factories\StoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Story extends Model
{
    /** @use HasFactory<StoryFactory> */
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

    /**
     * @return BelongsTo<Fandom, $this>
     */
    public function fandom(): BelongsTo
    {
        return $this->belongsTo(Fandom::class);
    }

    /**
     * @return BelongsToMany<Tag, $this>
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany<Like, $this>
     */
    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    /**
     * @return BelongsToMany<Character, $this>
     */
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
