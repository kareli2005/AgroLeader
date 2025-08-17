<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $locale = Request::segment(1);
        if (in_array($locale, config('app.supported_locales'))) {
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.locale'));
        }
    }
}
