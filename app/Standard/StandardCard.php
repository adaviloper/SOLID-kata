<?php

namespace App\Standard;

class StandardCard
{
    /** @var string */
    private $value;

    /** @var string */
    private $suit;

    private function __construct($array)
    {
        $this->value = $array['value'];
        $this->suit = $array['suit'];
    }

    public static function make(array $array = []): self
    {
        return new static($array);
    }

    public function value()
    {
        return $this->value;
    }

    public function suit()
    {
        return $this->suit;
    }
}
