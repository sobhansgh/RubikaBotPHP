<?php
require '../vendor/autoload.php';

use RubikaBot\Rubika;

$bot = new Rubika("TOKEN");

$result = $bot->sendMessage([
    "chat_id" => "...",
    "text" => "سلام"
]);

print_r($result);