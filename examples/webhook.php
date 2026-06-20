<?php

use Sobhansgh\Rubikabotphp\Update\Update;

$update = Update::fromWebhook();

if ($update->isMessage()) {

    echo $update->text();

}
$chatId = $update->chatId();

$text = $update->text();

$response = $bot->getUpdates();

foreach ($response->get("result") as $item) {

    $update = Update::make($item);

}