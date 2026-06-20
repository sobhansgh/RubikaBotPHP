<?php

require 'vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Keyboard\Button;
use Sobhansgh\Rubikabotphp\Keyboard\InlineButton;
use Sobhansgh\Rubikabotphp\Keyboard\InlineKeyboard;
use Sobhansgh\Rubikabotphp\Keyboard\Keyboard;
use Sobhansgh\Rubikabotphp\Rubika;

$bot = new Rubika('token');
$keyboard = Keyboard::make()
    ->row(
        Button::text('ثبت نام'),
        Button::text('ورود')
    )
    ->row(
        Button::contact('ارسال شماره')
    )
    ->build();

$inline = InlineKeyboard::make()
    ->row(
        InlineButton::callback('ثبت', 'register'),
        InlineButton::callback('لغو', 'cancel')
    )
    ->row(
        InlineButton::url('وبسایت', 'https://google.com')
    )
    ->build();

$bot->sendMessage([

    'chat_id'=>'chatId',

    'text'=>'سلام',

    'reply_markup'=>$keyboard

]);

$bot->sendMessage([

    'chat_id' => 'chatId',

    'text' => 'سلام',

    'reply_markup' => $inline

]);