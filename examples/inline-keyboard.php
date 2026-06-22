<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Keyboard\InlineButton;
use Sobhansgh\Rubikabotphp\Keyboard\InlineKeyboard;
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Message;

$bot = new Rubika('YOUR_BOT_TOKEN');

$keyboard = InlineKeyboard::make()
    ->row(
        InlineButton::callback('تایید', 'ok'),
        InlineButton::callback('لغو', 'cancel')
    )
    ->build();

$bot->sendMessage(
    Message::make()
        ->chat('CHAT_ID')
        ->text('آیا مطمئن هستید؟')
        ->inlineKeypad($keyboard)

);