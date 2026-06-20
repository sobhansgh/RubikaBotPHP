<?php

namespace Sobhansgh\Rubikabotphp\Types;
use Sobhansgh\Rubikabotphp\File\InputFile;
class Voice extends BaseType
{
    public function file(
        string|InputFile $photo
    ): static
    {
        $this->data['voice'] = $photo;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }
}