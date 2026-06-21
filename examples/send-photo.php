<?php

require __DIR__ . '/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Message;

$bot = new Rubika('YOUR_BOT_TOKEN');

$response = $bot->sendMessage(
    Message::make()
        ->chat('CHAT_ID')
        ->text('سلام از RubikaBotPHP')
);

print_r($response->all());