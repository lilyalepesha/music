<?php

namespace App\Enums;

use Exception;

enum GenreEnum: string
{
    case ROCK = 'Rock';
    case ALTERNATIVE_ROCK = 'Alternative Rock';
    case HIP_HOP = 'Hip hip';
    case LOFI = 'Lo-fi';
    case LOUNGE = 'Lounge';
    case JAZZ = 'Jazz';
    case AMBIENT = 'Ambient';
    case FUNK = 'Funk';
    case POP = 'Pop';

    /**
     * @return string
     */
    public function color(): string
    {
        return match($this) {
            self::ALTERNATIVE_ROCK => 'coral',
            self::HIP_HOP => 'blue',
            self::LOFI => 'green',
            self::FUNK => 'darkblue',
            self::POP => 'pink',
            default => 'green',
        };
     }

    /**
     * @return string
     * @throws Exception
     */
     public function title(): string
     {
         return match ($this) {
             self::POP => 'POP',
             self::HIP_HOP => 'Hip-hop',
             default => throw new Exception('Unexpected match value'),
         };
     }
}
