<?php

namespace Sobhansgh\Rubikabotphp\Helpers;

class Validator
{
    public static function isChatId(string $id): bool
    {
        return trim($id) !== '';
    }

    public static function isUrl(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    public static function isFile(string $path): bool
    {
        return file_exists($path);
    }

    public static function isJson(string $json): bool
    {
        json_decode($json);

        return json_last_error() === JSON_ERROR_NONE;
    }
}