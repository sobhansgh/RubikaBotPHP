<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Photo extends BaseType
{
    public function file(string $file): static
    {
        $this->data['photo'] = $file;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }
}