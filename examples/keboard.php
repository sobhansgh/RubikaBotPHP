<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Keyboard\Button;
use Sobhansgh\Rubikabotphp\Keyboard\Keyboard;
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Message;

$bot = new Rubika('YOUR_BOT_TOKEN');

$keyboard = Keyboard::make()

    ->row(
        Button::text('سفارش'),
        Button::text('پروفایل')
    )

    ->row(
        Button::text('راهنما')
    )
    ->build();

$bot->sendMessage(
    Message::make()
        ->chat('CHAT_ID')
        ->text('یکی از گزینه‌ها را انتخاب کنید.')
        ->chatKeypad($keyboard)

);