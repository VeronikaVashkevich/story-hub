<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    use HasFactory;

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
