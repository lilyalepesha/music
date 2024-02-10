<?php

namespace App\View\Components;

use App\Models\Artist;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\Component;

class Catalog extends Component
{
    /**
     * @var string
     */
    private string $all = 'all';

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $artists = Artist::query()
            ->selectRaw(
                'records.name as record_name,
         artists.name as artist_name,
         genres.title as genre_title,
         price,
         discount,
         albums.name as album_name'
            )
            ->join('albums', 'artists.album_id', '=', 'albums.id')
            ->join('records', 'record_id', '=', 'records.id')
            ->join('genres', 'records.genre_id', '=', 'genres.id')
            ->when(request('genre') !== 'all', function (Builder $query) {
                $query->where('genres.title', request('genre'));
            })
            ->when(
                !empty(request('show-more')),
                fn($query) => $query,
                fn($query) => $query->limit(3)
            )->get();

        return view('components.catalog', compact('artists'));
    }
}
