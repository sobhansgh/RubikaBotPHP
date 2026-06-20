<?php

namespace Sobhansgh\Rubikabotphp\File;

class InputFile
{
    protected string $path;

    private function __construct(string $path)
    {
        $this->path = $path;
    }

    public static function make(string $path): self
    {
        return new self($path);
    }

    public function getCurlFile(): \CURLFile
    {
        return new \CURLFile($this->path);
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function exists(): bool
    {
        return file_exists($this->path);
    }

    public static function fromUrl( string $url ): string
    {
        return $url;
    }
}