<?php
use Sobhansgh\Rubikabotphp\Helpers\Str;
use Sobhansgh\Rubikabotphp\Helpers\Validator;

$text = Str::markdown("*سلام*");

if (!Validator::isUrl($url)) {
    throw new InvalidArgumentException("Invalid URL");
}