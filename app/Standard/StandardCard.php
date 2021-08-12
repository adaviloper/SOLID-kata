<?php

namespace App\Standard;

use App\Standard\Glyphs\GlyphContract;
use App\Standard\Suits\Suit;

class StandardCard
{
    /** @var string */
    private $glyph;

    /** @var string */
    private $suit;

    private function __construct(Suit $suit, ?GlyphContract $glyph = null)
    {
        $this->suit = $suit;
        $this->glyph = $glyph;
    }

    public static function make(Suit $suit, ?GlyphContract $glyph = null): self
    {
        return new static($suit, $glyph);
    }

    public function glyph()
    {
        return $this->glyph;
    }

    public function suit()
    {
        return $this->suit;
    }
}
