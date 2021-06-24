<?php

namespace Tests\Unit;

use App\StandardDeck;
use PHPUnit\Framework\TestCase;

class DeckTest extends TestCase
{
    /** @test */
    public function a_standard_deck_has_cards()
    {
        $deck = StandardDeck::make();

        self::assertObjectHasAttribute('cards', $deck);
        self::assertTrue(is_array($deck->cards));
    }
}
