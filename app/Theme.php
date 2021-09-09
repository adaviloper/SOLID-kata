<?php

namespace App;

use App\Standard\Suits\Colors\Color;

interface Theme
{
    public function primary(): Color;

    public function secondary(): Color;
}
