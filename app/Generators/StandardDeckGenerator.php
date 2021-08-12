<?php

namespace App\Generators;

use App\Interfaces\StandardCardAttributesContract;
use App\Interfaces\DeckGenerator;
use App\Standard\StandardCard;
use App\Standard\StandardStandardCardAttributes;
use App\Standard\StandardDeck;
use App\Standard\Suits\Joker;

class StandardDeckGenerator implements DeckGenerator
{
    private $attributes;

    public function __construct(StandardCardAttributesContract $cardAttributes)
    {
        $this->attributes = $cardAttributes;
    }

    public function generate(): StandardDeck
    {
        $cards = $this->attributes->suits()->map(function ($suit) {
            return $this->attributes->glyphs()->map(function ($glyph) use ($suit) {
                // $cards->push(CardFactory::build($suit, $value));
                return StandardCard::make($suit, $glyph);
            });
        })->flatten();

        $cards->push(StandardCard::make(new Joker()))->push(StandardCard::make(new Joker()));

        return StandardDeck::make($cards);
    }
}
