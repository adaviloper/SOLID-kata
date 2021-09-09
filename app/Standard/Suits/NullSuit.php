<?php

namespace App\Standard\Suits;

use App\Standard\Suits\Colors\NullColor;
use App\Standard\Suits\Colors\Color;

class NullSuit extends Suit
{
    public function __construct()
    {
        $this->color = new NullColor();
    }
}
