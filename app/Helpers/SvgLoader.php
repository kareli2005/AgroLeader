<?php

namespace App\Helpers;

class SvgLoader
{
    public static function load(string $path): string
    {
        $fullPath = public_path($path);

        if (file_exists($fullPath)) {
            return str_replace('<svg', '<svg fill="currentColor"', file_get_contents($fullPath));
        }

        return '';
    }
}
