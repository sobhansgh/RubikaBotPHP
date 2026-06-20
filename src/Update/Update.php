<?php

namespace Sobhansgh\Rubikabotphp\Update;

class Update
{
    protected array $update;

    public function __construct(array $update)
    {
        $this->update = $update;
    }

    public static function make(array $update): self
    {
        return new self($update);
    }

    public static function fromWebhook(): self
    {
        return new self(
            json_decode(file_get_contents("php://input"), true) ?? []
        );
    }

    public function all(): array
    {
        return $this->update;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->update[$key] ?? $default;
    }

    public function has(string $key): bool
    {
        return isset($this->update[$key]);
    }

    public function message(): ?array
    {
        return $this->update["message"] ?? null;
    }

    public function callbackQuery(): ?array
    {
        return $this->update["callback_query"] ?? null;
    }

    public function chatId(): ?string
    {
        return $this->update["message"]["chat_id"] ?? null;
    }

    public function text(): ?string
    {
        return $this->update["message"]["text"] ?? null;
    }

    public function messageId(): mixed
    {
        return $this->update["message"]["message_id"] ?? null;
    }

    public function senderId(): ?string
    {
        return $this->update["message"]["from"]["id"] ?? null;
    }

    public function callbackData(): ?string
    {
        return $this->update["callback_query"]["data"] ?? null;
    }

    public function isMessage(): bool
    {
        return isset($this->update["message"]);
    }

    public function isCallback(): bool
    {
        return isset($this->update["callback_query"]);
    }
}