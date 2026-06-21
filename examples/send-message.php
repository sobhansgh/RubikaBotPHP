<?php

require 'vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Rubika;

$bot = new Rubika('token');

$response = $bot->sendMessage([
    "chat_id"=>"u0...",
    "text"=>"سلام"
]);

if($response->success())
{
    echo "Done";
}