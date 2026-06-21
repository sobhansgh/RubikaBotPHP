<?php

namespace Tests\Keyboard;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Keyboard\InlineButton;
use Sobhansgh\Rubikabotphp\Keyboard\InlineKeyboard;

class InlineKeyboardTest extends TestCase
{
    public function test_inline_keyboard()
    {
        $keyboard = InlineKeyboard::make()

            ->row(

                InlineButton::callback(

                    'Ok',

                    'ok'

                )

            )

            ->build();

        $this->assertNotEmpty($keyboard);
    }
}