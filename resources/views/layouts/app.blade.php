<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head >
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/utils.css') }}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<x-navigation.sidebar />
@include('partials.header')
<main>
    @yield('content')
</main>
@include('partials.footer')
</body>
</html>
