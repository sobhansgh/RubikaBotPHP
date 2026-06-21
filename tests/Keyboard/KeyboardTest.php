<?php

namespace Tests\Keyboard;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Keyboard\Keyboard;
use Sobhansgh\Rubikabotphp\Keyboard\Button;

class KeyboardTest extends TestCase
{
    public function test_keyboard_builder()
    {
        $keyboard = Keyboard::make()

            ->row(

                Button::text("One"),

                Button::text("Two")

            )

            ->build();

        $this->assertNotEmpty($keyboard);
    }
}