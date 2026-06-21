<?php

namespace Tests\Update;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Update\Update;

class UpdateTest extends TestCase
{
    public function test_update()
    {
        $update = Update::make([

            'message'=>[
                'text'=>'hello'
            ]

        ]);

        $this->assertEquals(

            'hello',

            $update->text()

        );
    }
}