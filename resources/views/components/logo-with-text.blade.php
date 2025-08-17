@php $currentLocale = app()->getLocale(); @endphp

<a class="logo" href="{{ route('home', ['locale' => $currentLocale]) }}">
    <img src="{{ asset('images/logo-with-text-en.png') }}" alt="App Logo" class="logo-image">
</a>
