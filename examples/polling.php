<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Rubika;

$bot = new Rubika('YOUR_BOT_TOKEN');

$response = $bot->getUpdates();

print_r($response->all());