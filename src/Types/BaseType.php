<?php

namespace Sobhansgh\Rubikabotphp\Types;

abstract class BaseType
{
    protected array $data = [];

    public static function make(): static
    {
        return new static();
    }

    public function chat(string $chatId): static
    {
        $this->data['chat_id'] = $chatId;

        return $this;
    }

    public function disableNotification(bool $value = true): static
    {
        $this->data['disable_notification'] = $value;

        return $this;
    }

    public function chatKeypad(array $keyboard): static
    {
        $this->data['chat_keypad'] = $keyboard;
        $this->data['chat_keypad_type'] = 'New';
        return $this;
    }

    public function inlineKeypad(array $keyboard): static
    {
        $this->data['inline_keypad'] = $keyboard;
        return $this;
    }

    public function toArray(): array
    {
        return $this->data;
    }
}