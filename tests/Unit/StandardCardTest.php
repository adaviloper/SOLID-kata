<?php

namespace Tests\Unit;

use App\Standard\StandardCard;
use Tests\TestCase;

class StandardCardTest extends TestCase
{
    /** @test */
    public function a_card_can_be_created_with_a_value_and_suit(): void
    {
        $card = StandardCard::make([
            'value' => 'some-value',
            'suit' => 'some-suit',
        ]);

        self::assertEquals('some-value', $card->value());
        self::assertEquals('some-suit', $card->suit());
    }
}
