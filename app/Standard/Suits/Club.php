<?php

namespace App\Standard\Suits;

use App\Standard\Suits\Colors\Black;

class Club extends Suit
{
    public function __construct()
    {
        $this->color = new Black();
    }
}
