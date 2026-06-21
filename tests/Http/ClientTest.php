<?php

namespace Tests\Http;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Http\Response;

class ClientTest extends TestCase
{
    public function test_response_object()
    {
        $response = new Response([

            'ok'=>true

        ]);

        $this->assertTrue(

            $response->get('ok')

        );
    }
}