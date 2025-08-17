@props(['icon' => null, 'route' => null])

@php
    $currentLocale = app()->getLocale();
    $linkRoute = $route ?? 'home';
    $locales = config('app.supported_locales');
@endphp

@if (is_null($route))
    <div class="header-button language-container rounded-8 border-main">
        {!! $icon !!}
        <div class="language-switcher border-main rounded-8">
            @foreach($locales as $locale)
                <button
                    type="button"
                    class="language-button {{ $currentLocale == $locale ? 'bg-primary text-secondary' : 'bg-secondary text-primary' }}"
                    onclick="setLocale('{{ $locale }}')"
                >
                    {{ strtoupper($locale) }}
                </button>
            @endforeach
        </div>
    </div>
@else
    <a href="{{ route($linkRoute, ['locale' => $currentLocale]) }}"
       class="header-button rounded-8 border-main {{ Route::currentRouteName() === $linkRoute ? 'active-button' : '' }}">
        {!! $icon !!}
    </a>
@endif
