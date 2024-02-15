<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'artist_id'
    ];

    /**
     * @return BelongsTo
     */
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
