<?php

namespace Sobhansgh\Rubikabotphp\Keyboard;

class InlineButton
{
    protected array $button = [];

    public static function callback(string $text, string $data): self
    {
        $button = new self();

        $button->button = [
            'button_text' => $text,
            'button_id'   => $data,
            'type'        => 'Simple',
        ];

        return $button;
    }

    public static function url(string $text, string $url): self
    {
        $button = new self();

        $button->button = [
            'button_text' => $text,
            'button_url'  => $url,
            'type'        => 'Link',
        ];

        return $button;
    }

    public function toArray(): array
    {
        return $this->button;
    }
}