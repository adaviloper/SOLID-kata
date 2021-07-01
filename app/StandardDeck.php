<?php

namespace App;

use Illuminate\Support\Collection;

class StandardDeck implements Interfaces\Deck
{
    /** @var Collection|StandardDeck[] $cards */
    public $cards;

    public function __construct(Collection $cards)
    {
        $this->cards = $cards;
    }

    public static function make($cards): StandardDeck
    {
        return new static($cards);
    }
}
