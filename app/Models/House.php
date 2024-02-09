<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class House extends Model
{
    use HasFactory;

    public function characters(): BelongsToMany
    {
        return ($this->belongsToMany(Character::class, 'houses_has_characters', 'house', 'character'));
    }
}
