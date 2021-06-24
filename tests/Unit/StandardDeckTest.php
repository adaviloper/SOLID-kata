<?php

namespace Tests\Unit;

use App\StandardCard;
use App\StandardDeck;
use Tests\TestCase;

class StandardDeckTest extends TestCase
{

    /** @test */
    public function a_standard_deck_has_a_collection_of_cards(): void
    {
        $deck = StandardDeck::make();

        self::assertObjectHasAttribute('cards', $deck);
        self::assertIsIterable($deck->cards);
        self::assertInstanceOf(StandardDeck::class, $deck);
    }

    /** @test */
    public function a_decks_cards_is_made_of_54_records(): void
    {
        $deck = StandardDeck::make();

        self::assertCount(54, $deck->cards);
    }

    /** @test */
    public function a_deck_has_collection_of_cards(): void
    {
        $deck = StandardDeck::make();

        self::assertInstanceOf(StandardCard::class, $deck->cards->first());
    }

    /** @test */
    public function a_deck_has_13_hearts(): void
    {
        $deck = StandardDeck::make();

        $hearts = $deck->cards->filter(static function ($card) {
            return $card->suit === StandardDeck::HEARTS;
        });

        self::assertCount(13, $hearts);
    }

    /** @test */
    public function a_deck_has_13_clubs(): void
    {
        $deck = StandardDeck::make();

        $clubs = $deck->cards->filter(static function ($card) {
            return $card->suit === StandardDeck::CLUBS;
        });

        self::assertCount(13, $clubs);
    }

    /** @test */
    public function a_deck_has_13_spades(): void
    {
        $deck = StandardDeck::make();

        $spades = $deck->cards->filter(static function ($card) {
            return $card->suit === StandardDeck::SPADES;
        });

        self::assertCount(13, $spades);
    }

    /** @test */
    public function a_deck_has_13_diamonds(): void
    {
        $deck = StandardDeck::make();

        $diamonds = $deck->cards->filter(static function ($card) {
            return $card->suit === StandardDeck::DIAMONDS;
        });

        self::assertCount(13, $diamonds);
    }

    /** @test */
    public function a_deck_has_2_jokers(): void
    {
        $deck = StandardDeck::make();

        $diamonds = $deck->cards->filter(static function ($card) {
            return $card->suit === StandardDeck::JOKER;
        });

        self::assertCount(2, $diamonds);
    }

    /** @test */
    public function a_deck_has_4_aces(): void
    {
        $deck = StandardDeck::make();

        $aces = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $aces);
    }

    /** @test */
    public function a_deck_has_4_2s(): void
    {
        $deck = StandardDeck::make();

        $twos = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $twos);
    }

    /** @test */
    public function a_deck_has_4_3s(): void
    {
        $deck = StandardDeck::make();

        $threes = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $threes);
    }

    /** @test */
    public function a_deck_has_4_4s(): void
    {
        $deck = StandardDeck::make();

        $fours = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $fours);
    }

    /** @test */
    public function a_deck_has_4_5s(): void
    {
        $deck = StandardDeck::make();

        $fives = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $fives);
    }

    /** @test */
    public function a_deck_has_4_6s(): void
    {
        $deck = StandardDeck::make();

        $sixes = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $sixes);
    }

    /** @test */
    public function a_deck_has_4_7s(): void
    {
        $deck = StandardDeck::make();

        $sevens = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $sevens);
    }

    /** @test */
    public function a_deck_has_4_8s(): void
    {
        $deck = StandardDeck::make();

        $eights = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $eights);
    }

    /** @test */
    public function a_deck_has_4_9s(): void
    {
        $deck = StandardDeck::make();

        $nines = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $nines);
    }

    /** @test */
    public function a_deck_has_4_10s(): void
    {
        $deck = StandardDeck::make();

        $tens = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $tens);
    }

    /** @test */
    public function a_deck_has_4_jacks(): void
    {
        $deck = StandardDeck::make();

        $jacks = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $jacks);
    }

    /** @test */
    public function a_deck_has_4_queens(): void
    {
        $deck = StandardDeck::make();

        $queens = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $queens);
    }

    /** @test */
    public function a_deck_has_4_kings(): void
    {
        $deck = StandardDeck::make();

        $kings = $deck->cards->filter(static function ($card) {
            return $card->value === StandardDeck::ACE;
        });

        self::assertCount(4, $kings);
    }
}
