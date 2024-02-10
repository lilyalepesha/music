<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Record extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function genres(): HasMany
    {
        return $this->hasMany(Genre::class, 'id', 'genre_id');
    }
}
