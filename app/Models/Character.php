<?php

namespace App\Models;

use Database\Factories\CharacterFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    /** @use HasFactory<CharacterFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * @return BelongsToMany<Story, $this>
     */
    public function stories()
    {
        return $this->belongsToMany(Story::class);
    }

    /**
     * @return BelongsTo<Fandom, $this>
     */
    public function fandom()
    {
        return $this->belongsTo(Fandom::class);
    }
}
