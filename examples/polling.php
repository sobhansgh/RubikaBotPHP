<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Rubika;

$bot = new Rubika('YOUR_BOT_TOKEN');

$response = $bot->getUpdates();

foreach ($response->get('result', []) as $update) {

    print_r($update);

}