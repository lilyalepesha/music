<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'song_id'
    ];

    /**
     * @return HasMany
     */
    public function records(): HasMany
    {
        return $this->hasMany(Song::class, 'id', 'song_id');
    }

    /**
     * @return HasManyThrough
     */
    public function genres(): HasManyThrough
    {
        return $this->hasManyThrough(Genre::class, Song::class, 'id', 'id', 'id', 'id');
    }
}
