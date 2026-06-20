<?php

namespace Sobhansgh\Rubikabotphp\Types;

use Sobhansgh\Rubikabotphp\File\InputFile;

class Sticker extends BaseType
{
    public function file(string|InputFile $sticker): static
    {
        $this->data['sticker'] = $sticker;

        return $this;
    }
}