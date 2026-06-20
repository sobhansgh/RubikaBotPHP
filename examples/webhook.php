<?php

use Sobhansgh\Rubikabotphp\Rubika;
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


$bot = new Rubika($token);

$bot->webhook()->set(
    "https://example.com/webhook.php"
);

$bot->webhook()->delete();


$update = $bot
    ->webhook()
    ->update();

$raw = $bot
    ->webhook()
    ->raw();