<?php

use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Update\Update;

$bot->router()

    ->command('/start', function(Update $update){

    })

    ->command('/help', function(Update $update){

    })

    ->message(function(Update $update){

    })

    ->callback(function(Update $update){

    })

    ->dispatch(Update::fromWebhook());