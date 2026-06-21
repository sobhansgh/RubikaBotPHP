<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Keyboard\Button;
use Sobhansgh\Rubikabotphp\Keyboard\Keyboard;
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Message;

$bot = new Rubika('YOUR_BOT_TOKEN');

$keyboard = Keyboard::make()

    ->row(
        Button::text('ثبت نام'),
        Button::text('ورود')
    )

    ->row(
        Button::text('راهنما')
    )

    ->build();

$bot->sendMessage(

    Message::make()

        ->chat('CHAT_ID')

        ->text('یکی از گزینه ها را انتخاب کنید.')

        ->replyMarkup($keyboard)

);