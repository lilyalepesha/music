<?php

namespace App\Enums;

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
    case OPIUM = 'opium';

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
}
