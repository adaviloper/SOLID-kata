<?php

namespace App;

class StandardCard
{
    /** @var string */
    public $value;

    /** @var string */
    public $suit;

    private function __construct($array)
    {
        $this->value = $array['value'];
        $this->suit = $array['suit'];
    }

    public static function make(array $array = []): self
    {
        return new static($array);
    }
}
