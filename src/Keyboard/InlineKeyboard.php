<?php

namespace Sobhansgh\Rubikabotphp\Keyboard;

class InlineKeyboard
{
    protected array $rows = [];

    public static function make(): self
    {
        return new self();
    }

    public function row(InlineButton ...$buttons): self
    {
        $row = [];

        foreach ($buttons as $button) {

            $row[] = $button->toArray();

        }

        $this->rows[] = [
            'buttons' => $row,
        ];

        return $this;
    }

    public function build(): array
    {
        return [
            'inline_keypad' => [
                'rows' => $this->rows,
            ],
        ];
    }
}