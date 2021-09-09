<?php

namespace App\Standard;

use App\Card;
use App\Standard\Glyphs\GlyphContract;
use App\Standard\Glyphs\NullGlyph;
use App\Standard\Suits\NullSuit;
use App\Standard\Suits\Suit;

class StandardCard extends Card
{
    /** @var GlyphContract */
    private $glyph;

    /** @var Suit */
    private $suit;

    private $isFlipped = true;

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
        if ($this->isFlipped) {
            return new NullGlyph();
        }
        return $this->glyph;
    }

    public function suit(): Suit
    {
        if ($this->isFlipped) {
            return new NullSuit();
        }
        return $this->suit;
    }

    public function flip(): void
    {
        $this->isFlipped = !$this->isFlipped;
    }
}
