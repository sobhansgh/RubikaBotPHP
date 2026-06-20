<?php

namespace Sobhansgh\Rubikabotphp\Types;

class Document extends BaseType
{
    public function file(string $file): static
    {
        $this->data['document'] = $file;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }
}