<?php

namespace App\Standard;

use App\Card;
use App\Standard\Glyphs\GlyphContract;
use App\Standard\Suits\Suit;

class StandardCard extends Card
{
    /** @var GlyphContract */
    private $glyph;

    /** @var Suit */
    private $suit;

    private function __construct(Suit $suit, GlyphContract $glyph)
    {
        $this->suit = $suit;
        $this->glyph = $glyph;
    }

    public static function make(Suit $suit, GlyphContract $glyph): self
    {
        return new static($suit, $glyph);
    }

    public function glyph(): GlyphContract
    {
        return $this->glyph;
    }

    public function suit(): Suit
    {
        return $this->suit;
    }
}
