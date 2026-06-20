<?php

namespace Sobhansgh\Rubikabotphp\Keyboard;

class Keyboard
{
    protected array $rows = [];

    public static function make(): self
    {
        return new self();
    }

    public function row(Button ...$buttons): self
    {
        $row = [];

        foreach ($buttons as $button) {
            $row[] = $button->toArray();
        }

        $this->rows[] = $row;

        return $this;
    }

    public function resize(bool $value = true): self
    {
        $this->resizeKeyboard = $value;

        return $this;
    }

    public function oneTime(bool $value = true): self
    {
        $this->oneTimeKeyboard = $value;

        return $this;
    }

    public function build(): array
    {
        return [

            'keyboard' => $this->rows,

            'resize_keyboard' => $this->resizeKeyboard ?? true,

            'one_time_keyboard' => $this->oneTimeKeyboard ?? false

        ];
    }
}