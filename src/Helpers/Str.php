<?php

namespace Sobhansgh\Rubikabotphp\Helpers;

class Str
{
    public static function markdown(string $text): string
    {
        return str_replace(
            [
                '_',
                '*',
                '[',
                ']',
                '(',
                ')',
                '~',
                '`',
                '>',
                '#',
                '+',
                '-',
                '=',
                '|',
                '{',
                '}',
                '.',
                '!'
            ],
            [
                '\_',
                '\*',
                '\[',
                '\]',
                '\(',
                '\)',
                '\~',
                '\`',
                '\>',
                '\#',
                '\+',
                '\-',
                '\=',
                '\|',
                '\{',
                '\}',
                '\.',
                '\!'
            ],
            $text
        );
    }

    public static function html(string $text): string
    {
        return htmlspecialchars(
            $text,
            ENT_QUOTES | ENT_SUBSTITUTE,
            'UTF-8'
        );
    }

    public static function limit(string $text, int $length): string
    {
        return mb_strlen($text) > $length
            ? mb_substr($text, 0, $length) . '...'
            : $text;
    }
}