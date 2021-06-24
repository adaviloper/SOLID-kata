<?php

namespace App;

class StandardDeck
{
    public $cards = [];

    public static function make()
    {
        return new static();
    }
}
