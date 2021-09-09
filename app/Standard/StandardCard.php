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

    private $isFaceDown = true;

    private function __construct(Suit $suit, GlyphContract $glyph)
    {
        $this->suit = $suit;
        $this->glyph = $glyph;
    }

    public static function make(Suit $suit, GlyphContract $glyph): self
    {
        return new static($suit, $glyph);
    }

    public function glyph(): ?GlyphContract
    {
        if ($this->isFaceDown) {
            return null;
        }
        return $this->glyph;
    }

    public function suit(): ?Suit
    {
        if ($this->isFaceDown) {
            return null;
        }
        return $this->suit;
    }

    public function flip(): void
    {
        $this->isFaceDown = !$this->isFaceDown;
    }
}
