<?php

require 'vendor/autoload.php';

use Sobhansgh\Rubikabotphp\File\InputFile;
use Sobhansgh\Rubikabotphp\Types\Photo;

$bot->sendPhoto(

    Photo::make()

        ->chat($chatId)

        ->file(

            InputFile::make(
                'photo.jpg'
            )
        )

);