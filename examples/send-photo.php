<?php

require __DIR__ . '/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\File\InputFile;
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Photo;

$bot = new Rubika('YOUR_BOT_TOKEN');

$response = $bot->sendPhoto(
    Photo::make()
        ->chat('CHAT_ID')
        ->file(InputFile::make(__DIR__.'/photo.jpg'))
        ->caption('نمونه تصویر')
);

print_r($response->all());