<?php

namespace Tests\Unit;

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
use App\Standard\StandardCard;
use App\Standard\StandardStandardCardAttributes;
use App\Standard\StandardDeck;
use App\Generators\StandardDeckGenerator;
use App\Standard\Suits\Club;
use App\Standard\Suits\Diamond;
use App\Standard\Suits\Heart;
use App\Standard\Suits\Joker;
use App\Standard\Suits\Spade;
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

        $this->generator = new StandardDeckGenerator(new StandardStandardCardAttributes());
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

        $hearts = $deck->cards()->filter(function (StandardCard $card) {
            return $card->suit() instanceof Heart;
        });

        self::assertCount(13, $hearts);
    }

    /** @test */
    public function a_deck_has_13_clubs(): void
    {
        $deck = $this->generator->generate();

        $clubs = $deck->cards()->filter(function (StandardCard $card) {
            return $card->suit() instanceof Club;
        });

        self::assertCount(13, $clubs);
    }

    /** @test */
    public function a_deck_has_13_spades(): void
    {
        $deck = $this->generator->generate();

        $spades = $deck->cards()->filter(function (StandardCard $card) {
            return $card->suit() instanceof Spade;
        });

        self::assertCount(13, $spades);
    }

    /** @test */
    public function a_deck_has_13_diamonds(): void
    {
        $deck = $this->generator->generate();

        $diamonds = $deck->cards()->filter(function (StandardCard $card) {
            return $card->suit() instanceof Diamond;
        });

        self::assertCount(13, $diamonds);
    }

    /** @test */
    public function a_deck_has_2_jokers(): void
    {
        $deck = $this->generator->generate();

        $jokers = $deck->cards()->filter(function (StandardCard $card) {
            return $card->suit() instanceof Joker;
        });

        self::assertCount(2, $jokers);
    }

    /** @test */
    public function a_deck_has_4_aces(): void
    {
        $deck = $this->generator->generate();

        $aces = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Ace;
        });

        self::assertCount(4, $aces);
    }

    /** @test */
    public function a_deck_has_4_2s(): void
    {
        $deck = $this->generator->generate();

        $twos = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Two;
        });

        self::assertCount(4, $twos);
    }

    /** @test */
    public function a_deck_has_4_3s(): void
    {
        $deck = $this->generator->generate();

        $threes = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Three;
        });

        self::assertCount(4, $threes);
    }

    /** @test */
    public function a_deck_has_4_4s(): void
    {
        $deck = $this->generator->generate();

        $fours = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Four;
        });

        self::assertCount(4, $fours);
    }

    /** @test */
    public function a_deck_has_4_5s(): void
    {
        $deck = $this->generator->generate();

        $fives = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Five;
        });

        self::assertCount(4, $fives);
    }

    /** @test */
    public function a_deck_has_4_6s(): void
    {
        $deck = $this->generator->generate();

        $sixes = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Six;
        });

        self::assertCount(4, $sixes);
    }

    /** @test */
    public function a_deck_has_4_7s(): void
    {
        $deck = $this->generator->generate();

        $sevens = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Seven;
        });

        self::assertCount(4, $sevens);
    }

    /** @test */
    public function a_deck_has_4_8s(): void
    {
        $deck = $this->generator->generate();

        $eights = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Eight;
        });

        self::assertCount(4, $eights);
    }

    /** @test */
    public function a_deck_has_4_9s(): void
    {
        $deck = $this->generator->generate();

        $nines = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Nine;
        });

        self::assertCount(4, $nines);
    }

    /** @test */
    public function a_deck_has_4_10s(): void
    {
        $deck = $this->generator->generate();

        $tens = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Ten;
        });

        self::assertCount(4, $tens);
    }

    /** @test */
    public function a_deck_has_4_jacks(): void
    {
        $deck = $this->generator->generate();

        $jacks = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Jack;
        });

        self::assertCount(4, $jacks);
    }

    /** @test */
    public function a_deck_has_4_queens(): void
    {
        $deck = $this->generator->generate();

        $queens = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof Queen;
        });

        self::assertCount(4, $queens);
    }

    /** @test */
    public function a_deck_has_4_kings(): void
    {
        $deck = $this->generator->generate();

        $kings = $deck->cards()->filter(function (StandardCard $card) {
            return $card->glyph() instanceof King;
        });

        self::assertCount(4, $kings);
    }
}
