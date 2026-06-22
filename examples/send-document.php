<?php

require __DIR__.'/../vendor/autoload.php';

use Sobhansgh\Rubikabotphp\File\InputFile;
use Sobhansgh\Rubikabotphp\Rubika;
use Sobhansgh\Rubikabotphp\Types\Document;

$bot = new Rubika('YOUR_BOT_TOKEN');

$bot->sendDocument(

    Document::make()
        ->chat('CHAT_ID')
        ->file(
            InputFile::make(__DIR__.'/document.pdf')
        )
        ->caption('نمونه فایل')
);