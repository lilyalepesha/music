<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class CatalogController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function filter(Request $request): JsonResponse
    {
        try {
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
                    !empty(request('showMore')),
                    fn($query) => $query,
                    fn($query) => $query->limit(3)
                )->get();

            return response()->json([
                'success' => true,
                'code' => 0,
                'data' => $artists,
            ]);
        } catch (Throwable $e) {
            report($e);

            return response()->json([
                'success' => true,
                'code' => 0,
                'message' => $e->getMessage() ?? 'Произошла ошибка',
            ]);
        }
    }
}
