<?php

namespace Sobhansgh\Rubikabotphp\Router;

use Closure;
use Sobhansgh\Rubikabotphp\Update\Update;

class Router
{
    protected array $commands = [];

    protected ?Closure $messageHandler = null;

    protected ?Closure $callbackHandler = null;

    public function command(string $command, Closure $callback): self
    {
        $this->commands[$command] = $callback;

        return $this;
    }

    public function message(Closure $callback): self
    {
        $this->messageHandler = $callback;

        return $this;
    }

    public function callback(Closure $callback): self
    {
        $this->callbackHandler = $callback;

        return $this;
    }

    public function dispatch(Update $update): void
    {
        if ($update->isMessage()) {

            $text = trim($update->text() ?? '');

            if (isset($this->commands[$text])) {

                call_user_func($this->commands[$text], $update);

                return;
            }

            if ($this->messageHandler) {

                call_user_func($this->messageHandler, $update);
            }

            return;
        }

        if ($update->isCallback()) {

            if ($this->callbackHandler) {

                call_user_func($this->callbackHandler, $update);
            }
        }
    }
}