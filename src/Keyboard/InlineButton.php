<?php

namespace Sobhansgh\Rubikabotphp\Keyboard;

class InlineButton
{
    protected array $button = [];

    public static function callback(string $text, string $data): self
    {
        $button = new self();

        $button->button = [

            'text' => $text,

            'callback_data' => $data

        ];

        return $button;
    }

    public static function url(string $text, string $url): self
    {
        $button = new self();

        $button->button = [

            'text' => $text,

            'url' => $url

        ];

        return $button;
    }

    public function toArray(): array
    {
        return $this->button;
    }
}