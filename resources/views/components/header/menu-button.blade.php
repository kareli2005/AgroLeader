@php
    use App\Helpers\SvgLoader;
    $menuSvgs = SvgLoader::load('images/menu-icon.svg');
@endphp
<button onclick="openSideBar()" class="header-button rounded-8 border-main hidden-desktop">
    {!! $menuSvgs !!}
</button>
