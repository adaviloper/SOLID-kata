<?php

namespace App\Standard;

use App\Interfaces\StandardCardAttributesContract;
use App\Standard\Glyphs\Ace;
use App\Standard\Glyphs\Eight;
use App\Standard\Glyphs\Five;
use App\Standard\Glyphs\Four;
use App\Standard\Glyphs\Jack;
use App\Standard\Glyphs\King;
use App\Standard\Glyphs\Nine;
use App\Standard\Glyphs\Queen;
use App\Standard\Glyphs\Seven;
use App\Standard\Glyphs\Six;
use App\Standard\Glyphs\Ten;
use App\Standard\Glyphs\Three;
use App\Standard\Glyphs\Two;
use App\Standard\Suits\Club;
use App\Standard\Suits\Diamond;
use App\Standard\Suits\Heart;
use App\Standard\Suits\Spade;
use App\Theme;
use Illuminate\Support\Collection;

class StandardStandardCardAttributes implements StandardCardAttributesContract
{
    /** @var Theme */
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function glyphs(): Collection
    {
        return collect([
            new Ace(),
            new Two(),
            new Three(),
            new Four(),
            new Five(),
            new Six(),
            new Seven(),
            new Eight(),
            new Nine(),
            new Ten(),
            new Jack(),
            new Queen(),
            new King(),
        ]);
    }

    public function suits(): Collection
    {
        return collect([
            new Spade($this->theme->primary()),
            new Heart($this->theme->secondary()),
            new Club($this->theme->primary()),
            new Diamond($this->theme->secondary()),
        ]);
    }
}
