<?php

namespace Etec\Aula\Lib;

/**
 * Classe que limpa as strings enviadas pelos formulários
 */
class Sanitizer
{
    /**
     * Limpa um array de strings
     *
     * @param array $data
     * @return void
     */
    public static function sanitizeAll(array &$data): void
    {
        foreach ($data as $key => &$value) {
            $value = self::sanitizeString($value);
        }
    }

    /**
     * Limpa um string
     *
     * @param string $input
     * @return string
     */
    public static function sanitizeString(string $input): string
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }
}
