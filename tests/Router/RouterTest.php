<?php

namespace Tests\Router;

use Tests\TestCase;
use Sobhansgh\Rubikabotphp\Router\Router;

class RouterTest extends TestCase
{
    public function test_router_created()
    {
        $router = new Router();

        $this->assertInstanceOf(

            Router::class,

            $router

        );
    }
}