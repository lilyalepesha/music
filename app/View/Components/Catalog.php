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
            ->selectRaw('songs.name as song_name, artists.name as artist_name, genres.title as genre_title, price, discount')
            ->join('songs', 'song_id', '=', 'songs.id')
            ->join('genres', 'songs.genre_id', '=', 'genres.id')
            ->when(request()->filled('genre') || request('genre') != $this->all, function (Builder $query) {
                $query->where('genres.title', request('genre'));
            })
            ->get();

        return view('components.catalog', compact('artists'));
    }
}
