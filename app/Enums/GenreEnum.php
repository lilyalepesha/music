<?php

namespace App\Enums;

enum GenreEnum: string
{
    case ROCK = 'Rock';
    case ALTERNATIVE_ROCK = 'Alternative Rock';
    case HIP_HOP = 'Hip hop';
    case PUNK_ROCK = 'Punk Rock';
    case POP = 'POP';
    case FUNK = 'Funk';

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
