<?php

namespace App;

use Illuminate\Support\Collection;

class StandardDeck
{
    public const HEARTS = 'hearts';
    public const SPADES = 'spades';
    public const CLUBS = 'clubs';
    public const DIAMONDS = 'diamonds';
    public const JOKER = 'joker';

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

    public const VALUES = [
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

    public const SUITS = [
        self::HEARTS,
        self::SPADES,
        self::CLUBS,
        self::DIAMONDS,
    ];

    /** @var Collection $cards */
    public $cards;

    public function __construct()
    {
        $this->cards = collect();
        foreach (self::SUITS as $suit) {
            foreach(self::VALUES as $value) {
                $this->cards->push(StandardCard::make([
                    'value' => $value,
                    'suit' => $suit,
                ]));
            }
        }
        $this->cards->push(StandardCard::make([
            'value' => -1,
            'suit' => self::JOKER,
        ]))->push(StandardCard::make([
            'value' => -1,
            'suit' => self::JOKER,
        ]));
    }

    public static function make(): StandardDeck
    {
        return new static();
    }
}
