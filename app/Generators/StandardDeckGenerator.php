<?php

namespace App\Generators;

use App\Interfaces\DeckGenerator;
use App\Standard\StandardCard;
use App\Standard\StandardCardAttributes;
use App\Standard\StandardDeck;

class StandardDeckGenerator implements DeckGenerator
{
    private $attributes;

    public function __construct()
    {
        $this->attributes = new StandardCardAttributes();
    }

    public function generate(): StandardDeck
    {
        $cards = collect();
        foreach ($this->attributes->suits() as $suit) {
            foreach($this->attributes->values() as $value) {
                $cards->push(StandardCard::make([
                    'value' => $value,
                    'suit' => $suit,
                ]));
            }
        }

        $cards->push(StandardCard::make([
            'value' => -1,
            'suit' => $this->attributes::JOKER,
        ]))->push(StandardCard::make([
            'value' => -1,
            'suit' => $this->attributes::JOKER,
        ]));

        return StandardDeck::make($cards);
    }
}
