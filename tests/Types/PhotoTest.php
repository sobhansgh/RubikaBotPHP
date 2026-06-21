<?php

namespace Tests\Types;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Types\Photo;

class PhotoTest extends TestCase
{
    public function test_photo_builder()
    {
        $photo = Photo::make()

            ->chat('123')

            ->file('photo.jpg')

            ->toArray();

        $this->assertEquals(

            'photo.jpg',

            $photo['photo']

        );
    }
}