<?php

namespace Sobhansgh\Rubikabotphp\Types;

use Sobhansgh\Rubikabotphp\File\InputFile;

class Animation extends BaseType
{
    public function file(string|InputFile $animation): static
    {
        $this->data['animation'] = $animation;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }

    public function duration(int $seconds): static
    {
        $this->data['duration'] = $seconds;

        return $this;
    }
}