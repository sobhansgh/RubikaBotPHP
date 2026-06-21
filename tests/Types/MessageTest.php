<?php

namespace Tests\Types;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Types\Message;

class MessageTest extends TestCase
{
    public function test_message_builder()
    {
        $message = Message::make()

            ->chat('123')

            ->text('Hello')

            ->toArray();

        $this->assertEquals(

            'Hello',

            $message['text']

        );
    }
}