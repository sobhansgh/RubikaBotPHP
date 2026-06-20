<?php

namespace Sobhansgh\Rubikabotphp\Types;
use Sobhansgh\Rubikabotphp\File\InputFile;

class Video extends BaseType
{
    public function file(
        string|InputFile $photo
    ): static
    {
        $this->data['video'] = $photo;

        return $this;
    }

    public function caption(string $caption): static
    {
        $this->data['caption'] = $caption;

        return $this;
    }
}