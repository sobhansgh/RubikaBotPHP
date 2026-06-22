<?php

namespace Sobhansgh\Rubikabotphp\Keyboard;

class Button
{
    protected array $button = [];

    public static function text(string $text): self
    {
        $button = new self();

        $button->button = [
            'button_text' => $text,
            'type' => 'Simple'
        ];

        return $button;
    }

    public static function contact(string $text): self
    {
        $button = new self();

        $button->button = [
            'text' => $text,
            'request_contact' => true
        ];

        return $button;
    }

    public static function location(string $text): self
    {
        $button = new self();

        $button->button = [
            'text' => $text,
            'request_location' => true
        ];

        return $button;
    }

    public function toArray(): array
    {
        return $this->button;
    }
}