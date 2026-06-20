<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Voice extends BaseType
{
    public function file(string $file): static
    {
        $this->data['voice'] = $file;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }
}