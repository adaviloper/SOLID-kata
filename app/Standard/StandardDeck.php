<?php

namespace App\Standard;

use App\Interfaces\Deck;
use Illuminate\Support\Collection;

class StandardDeck implements Deck
{
    /** @var Collection|StandardCard[] $cards */
    private $cards;

    private function __construct(Collection $cards)
    {
        $this->cards = $cards;
    }

    public static function make(Collection $cards): StandardDeck
    {
        return new static($cards);
    }

    public function cards()
    {
        return $this->cards;
    }
}
