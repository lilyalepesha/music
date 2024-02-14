<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use Sluggable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug'
    ];

    /**
     * @return array[]
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * @return BelongsToMany
     */
    public function record(): BelongsToMany
    {
        return $this->belongsToMany(Record::class);
    }
}
