<?php

namespace Etec\Aula\Lib;

class Sanitizer
{
    public static function sanitizeAll(array &$data): void
    {
        foreach ($data as $key => $value) {
            $value = self::sanitizeString($value);
        }
    }

    public static function sanitizeString(string $input): string
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }
}
