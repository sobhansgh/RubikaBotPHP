<?php

require 'vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Rubika;

$bot = new Rubika('token');

$response = $bot->sendPhoto([
    'chat_id'=>'...',
    'file'=>'photo.jpg'
]);

if($response->success())
{
    echo "Done";
}