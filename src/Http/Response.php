<?php

namespace Sobhansgh\Rubikabotphp\Http;

class Response
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function all(): array
    {
        return $this->data;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->data[$key] ?? $default;
    }

    public function has(string $key): bool
    {
        return isset($this->data[$key]);
    }

    public function success(): bool
    {
        return ($this->data['status'] ?? null) === "OK";
    }

    public function json(): string
    {
        return json_encode($this->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}