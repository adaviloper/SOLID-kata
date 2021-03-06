<?php

namespace App\Standard\Suits;

use App\Standard\Suits\Colors\Color;

abstract class Suit
{
    /** @var Color $color */
    protected $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function color(): Color
    {
        return $this->color;
    }
}
