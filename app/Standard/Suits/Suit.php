<?php

namespace App\Standard\Suits;

use Exception;

abstract class Suit
{
    /** @var string $label */
    protected $label;

    /** @var string $color */
    protected $color;

    /** @var int $value */
    protected $value;

    public function value(): int
    {
        return $this->value;
    }

    public function color(): string
    {
        return $this->color;
    }

    public function label(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        if (!is_string($label)) {
            throw new Exception('Label must be a string.');
        }

        $this->label = $label;
    }

    public function setValue(int $value): void
    {
        if (!is_numeric($value)) {
            throw new Exception('Value must be numeric.');
        }

        $this->value = $value;
    }

}
