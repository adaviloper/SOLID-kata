<?php

namespace App\Standard;

use App\Interfaces\StandardCardAttributesContract;

class StandardStandardCardAttributes implements StandardCardAttributesContract
{
    public const HEARTS = [
        'label' => 'hearts',
        'color' => 'red',
    ];
    public const SPADES = [
        'label' => 'spades',
        'color' => 'red',
    ];
    public const CLUBS = [
        'label' => 'clubs',
        'color' => 'red',
    ];
    public const DIAMONDS = [
        'label' => 'diamonds',
        'color' => 'red',
    ];
    public const JOKER = [
        'label' => 'joker',
        'color' => 'black',
    ];
    public const SUITS = [
        self::HEARTS,
        self::SPADES,
        self::CLUBS,
        self::DIAMONDS,
    ];

    public const ACE = 1;
    public const TWOS = 2;
    public const THREES = 3;
    public const FOURS = 4;
    public const FIVES = 5;
    public const SIXES = 6;
    public const SEVENS = 7;
    public const EIGHTS = 8;
    public const NINES = 9;
    public const TENS = 10;
    public const JACKS = 11;
    public const QUEENS = 12;
    public const KINGS = 13;

    public function values()
    {
        return [
            self::ACE,
            self::TWOS,
            self::THREES,
            self::FOURS,
            self::FIVES,
            self::SIXES,
            self::SEVENS,
            self::EIGHTS,
            self::NINES,
            self::TENS,
            self::JACKS,
            self::QUEENS,
            self::KINGS,
        ];
    }

    public function suits()
    {
        return self::SUITS;
    }
}
