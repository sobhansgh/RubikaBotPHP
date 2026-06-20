<?php

namespace Sobhansgh\Rubikabotphp\Types;

use Sobhansgh\Rubikabotphp\File\InputFile;

class Audio extends BaseType
{
    public function file(
        string|InputFile $photo
    ): static
    {
        $this->data['audio'] = $photo;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }
}