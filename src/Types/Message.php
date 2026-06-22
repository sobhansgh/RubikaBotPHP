<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Message extends BaseType
{
    public function text(string $text): static
    {
        $this->data['text'] = $text;

        return $this;
    }

    public function parseMode(string $mode): static
    {
        $this->data['parse_mode'] = $mode;

        return $this;
    }

}