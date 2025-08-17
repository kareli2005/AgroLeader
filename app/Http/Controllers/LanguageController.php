<?php

namespace App\Http\Controllers;
class LanguageController extends Controller
{
    public function switch($locale = 'en')
    {
        $previousUrl = url()->previous();
        $parsedUrl = parse_url($previousUrl);
        $path = $parsedUrl['path'] ?? '/';

        $segments = explode('/', trim($path, '/'));
        $supported = config('app.supported_locales', ['en', 'ge']);

        if (in_array($segments[0] ?? '', $supported)) {
            $segments[0] = $locale;
        } else {
            array_unshift($segments, $locale);
        }
        $newPath = '/' . implode('/', $segments);
        if (!empty($parsedUrl['query'])) {
            $newPath .= '?' . $parsedUrl['query'];
        }

        return redirect($newPath);
    }
}
