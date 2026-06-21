<?php

namespace Tests\Helpers;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Helpers\Validator;

class ValidatorTest extends TestCase
{
    public function test_url()
    {
        $this->assertTrue(

            Validator::isUrl(

                'https://google.com'

            )

        );
    }
}