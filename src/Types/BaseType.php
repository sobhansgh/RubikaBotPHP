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

    public function replyMarkup(array $markup): static
    {
        $this->data['reply_markup'] = $markup;

        return $this;
    }

    public function toArray(): array
    {
        return $this->data;
    }
}