<?php

namespace App\Generators;

use App\Interfaces\DeckGenerator;
use App\Interfaces\StandardCardAttributesContract;
use App\Standard\Glyphs\NullGlyph;
use App\Standard\StandardCard;
use App\Standard\StandardDeck;
use App\Standard\Suits\Colors\NullColor;
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
                return StandardCard::make($suit, $glyph);
            });
        })->flatten();

        $cards->push(StandardCard::make(new Joker(new NullColor()), new NullGlyph()))
            ->push(StandardCard::make(new Joker(new NullColor()), new NullGlyph()));

        return StandardDeck::make($cards);
    }
}
