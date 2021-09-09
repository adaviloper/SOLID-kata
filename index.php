<?php

use App\Interfaces\Deck;
use App\Standard\StandardTheme;

require __DIR__ . '/vendor/autoload.php';

\Psy\Shell::debug(get_defined_vars());

$p = new \App\Standard\Suits\Colors\Red();
$s = new \App\Standard\Suits\Colors\Black();

$theme = new StandardTheme($p, $s);
$attr = new \App\Standard\StandardStandardCardAttributes($theme);
$gen = new \App\Generators\StandardDeckGenerator($attr);
$deck = $gen->generate();

class Controller
{
    public function __invoke(Deck $deck)
    {
        // TODO: Implement __invoke() method.
    }
}

