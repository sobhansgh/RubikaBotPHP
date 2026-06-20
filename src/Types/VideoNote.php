<?php

namespace Sobhansgh\Rubikabotphp\Types;

use Sobhansgh\Rubikabotphp\File\InputFile;

class VideoNote extends BaseType
{
    public function file(string|InputFile $videoNote): static
    {
        $this->data['video_note'] = $videoNote;

        return $this;
    }

    public function duration(int $seconds): static
    {
        $this->data['duration'] = $seconds;

        return $this;
    }

    public function length(int $length): static
    {
        $this->data['length'] = $length;

        return $this;
    }
}