<?php

namespace App\Standard\Suits;

use App\Standard\Suits\Colors\Red;

class Heart extends Suit
{
    public function __construct()
    {
        $this->color = new Red();
    }
}
