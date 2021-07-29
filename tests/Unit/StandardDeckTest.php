<?php

namespace Tests\Unit;

use App\Standard\StandardCard;
use App\Standard\StandardStandardCardAttributes;
use App\Standard\StandardDeck;
use App\Generators\StandardDeckGenerator;
use Tests\TestCase;

class StandardDeckTest extends TestCase
{
    /**
     * @var StandardDeckGenerator
     */
    protected $generator;

    /**
     * @var StandardStandardCardAttributes
     */
    protected $attributes;

    protected function setUp(): void
    {
        parent::setUp();

        $this->generator = new StandardDeckGenerator();
        $this->attributes = new StandardStandardCardAttributes();
    }

    /** @test */
    public function a_standard_deck_has_a_collection_of_cards(): void
    {
        $deck = $this->generator->generate();

        self::assertObjectHasAttribute('cards', $deck);
        self::assertIsIterable($deck->cards());
        self::assertInstanceOf(StandardDeck::class, $deck);
    }

    /** @test */
    public function a_decks_cards_is_made_of_54_records(): void
    {
        $deck = $this->generator->generate();

        self::assertCount(54, $deck->cards());
    }

    /** @test */
    public function a_deck_has_collection_of_cards(): void
    {
        $deck = $this->generator->generate();

        self::assertInstanceOf(StandardCard::class, $deck->cards()->first());
    }

    /** @test */
    public function a_deck_has_13_hearts(): void
    {
        $deck = $this->generator->generate();

        $hearts = $deck->cards()->filter(function ($card) {
            return $card->suit() === $this->attributes::HEARTS;
        });

        self::assertCount(13, $hearts);
    }

    /** @test */
    public function a_deck_has_13_clubs(): void
    {
        $deck = $this->generator->generate();

        $clubs = $deck->cards()->filter(function ($card) {
            return $card->suit() === $this->attributes::CLUBS;
        });

        self::assertCount(13, $clubs);
    }

    /** @test */
    public function a_deck_has_13_spades(): void
    {
        $deck = $this->generator->generate();

        $spades = $deck->cards()->filter(function ($card) {
            return $card->suit() === $this->attributes::SPADES;
        });

        self::assertCount(13, $spades);
    }

    /** @test */
    public function a_deck_has_13_diamonds(): void
    {
        $deck = $this->generator->generate();

        $diamonds = $deck->cards()->filter(function ($card) {
            return $card->suit() === $this->attributes::DIAMONDS;
        });

        self::assertCount(13, $diamonds);
    }

    /** @test */
    public function a_deck_has_2_jokers(): void
    {
        $deck = $this->generator->generate();

        $diamonds = $deck->cards()->filter(function ($card) {
            return $card->suit() === $this->attributes::JOKER;
        });

        self::assertCount(2, $diamonds);
    }

    /** @test */
    public function a_deck_has_4_aces(): void
    {
        $deck = $this->generator->generate();

        $aces = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $aces);
    }

    /** @test */
    public function a_deck_has_4_2s(): void
    {
        $deck = $this->generator->generate();

        $twos = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $twos);
    }

    /** @test */
    public function a_deck_has_4_3s(): void
    {
        $deck = $this->generator->generate();

        $threes = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $threes);
    }

    /** @test */
    public function a_deck_has_4_4s(): void
    {
        $deck = $this->generator->generate();

        $fours = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $fours);
    }

    /** @test */
    public function a_deck_has_4_5s(): void
    {
        $deck = $this->generator->generate();

        $fives = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $fives);
    }

    /** @test */
    public function a_deck_has_4_6s(): void
    {
        $deck = $this->generator->generate();

        $sixes = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $sixes);
    }

    /** @test */
    public function a_deck_has_4_7s(): void
    {
        $deck = $this->generator->generate();

        $sevens = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $sevens);
    }

    /** @test */
    public function a_deck_has_4_8s(): void
    {
        $deck = $this->generator->generate();

        $eights = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $eights);
    }

    /** @test */
    public function a_deck_has_4_9s(): void
    {
        $deck = $this->generator->generate();

        $nines = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $nines);
    }

    /** @test */
    public function a_deck_has_4_10s(): void
    {
        $deck = $this->generator->generate();

        $tens = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $tens);
    }

    /** @test */
    public function a_deck_has_4_jacks(): void
    {
        $deck = $this->generator->generate();

        $jacks = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $jacks);
    }

    /** @test */
    public function a_deck_has_4_queens(): void
    {
        $deck = $this->generator->generate();

        $queens = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $queens);
    }

    /** @test */
    public function a_deck_has_4_kings(): void
    {
        $deck = $this->generator->generate();

        $kings = $deck->cards()->filter(function ($card) {
            return $card->value() === $this->attributes::ACE;
        });

        self::assertCount(4, $kings);
    }
}
