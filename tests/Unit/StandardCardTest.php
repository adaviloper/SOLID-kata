<?php

namespace Tests\Unit;

use App\Standard\Glyphs\Ace;
use App\Standard\StandardCard;
use App\Standard\Suits\Heart;
use Tests\TestCase;

class StandardCardTest extends TestCase
{
    /** @test */
    public function a_card_can_be_created_with_a_value_and_suit(): void
    {
        $card = StandardCard::make(new Heart(), new Ace());

        self::assertInstanceOf(Ace::class, $card->glyph());
        self::assertInstanceOf(Heart::class, $card->suit());
    }
}
