<?php

namespace App\Enums;

use Exception;

enum GenreEnum: string
{
    case ROCK = 'rock';
    case ALTERNATIVE_ROCK = 'alternative_rock';
    case HIP_HOP = 'hip-hop';
    case PUNK_ROCK = 'lo-fi';
    case LOUNGE = 'lounge';
    case JAZZ = 'jazz';
    case AMBIENT = 'ambient';

    case FUNK = 'funk';
    case POP = 'pop';

    /**
     * @return string
     */
    public function color(): string
    {
        return match($this) {
            self::ALTERNATIVE_ROCK => 'coral',
            self::HIP_HOP => 'blue',
            self::PUNK_ROCK => 'green',
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
