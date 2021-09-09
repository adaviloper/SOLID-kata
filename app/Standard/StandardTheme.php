<?php

namespace App\Standard;

use App\Standard\Suits\Colors\Color;
use App\Theme;

class StandardTheme implements Theme
{
    /**
     * @var Color
     */
    private $primary;

    /**
     * @var Color
     */
    private $secondary;

    public function __construct(Color $primary, Color $secondary)
    {
        $this->primary = $primary;
        $this->secondary = $secondary;
    }

    public function primary(): Color
    {
        return $this->primary;
    }

    public function secondary(): Color
    {
        return $this->secondary;
    }
}
