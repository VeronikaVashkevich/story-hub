<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function stories(): BelongsToMany
    {
        return $this->belongsToMany(Story::class);
    }
}
