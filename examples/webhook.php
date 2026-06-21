<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Rubika;

$bot = new Rubika('YOUR_BOT_TOKEN');

$response = $bot->webhook()->set(
    'https://example.com/webhook.php'
);

print_r($response->all());