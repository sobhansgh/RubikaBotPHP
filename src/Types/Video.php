<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Video extends BaseType
{
    public function file(string $file): static
    {
        $this->data['video'] = $file;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }
}