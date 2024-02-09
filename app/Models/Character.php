<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    use HasFactory;
    public function houses(): BelongsToMany
    {
        return $this->belongsToMany(House::class, 'houses_has_characters', 'character','house');
    }
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, "id_title");
    }
    public function father(): BelongsTo
    {
        return $this->belongsTo(Character::class, "father_id");
    }

    public function mother(): BelongsTo
    {
        return $this->belongsTo(Character::class, "father_id");
    }
}
