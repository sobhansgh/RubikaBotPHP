<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Update\Update;

$bot = new Rubika('YOUR_BOT_TOKEN');

$bot->router()

    ->command('/start', function(Update $update){

        echo "Start Command";

    })

    ->message(function(Update $update){

        echo $update->text();

    })

    ->dispatch(Update::fromWebhook());