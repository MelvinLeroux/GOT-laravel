<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;
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
