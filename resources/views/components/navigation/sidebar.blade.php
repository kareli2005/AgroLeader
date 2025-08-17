@php
	use App\Helpers\SvgLoader;
	$closeSvg = SvgLoader::load('images/close-icon.svg');
	$currentLocale = app()->getLocale();
	
	$navButtons = [
		'home' => [
			'label' => 'home_page',
			'icon' => SvgLoader::load('images/home-icon.svg'),
			'route' => 'home'
		],
		'profile' => [
			'label' => 'profile',
			'icon' => SvgLoader::load('images/profile-icon.svg'),
			'route' => 'profile'
		],
		'products' => [
			'label' => 'products',
			'icon' => SvgLoader::load('images/products-icon.svg'),
			'route' => 'products'
		],
		'favourites' => [
			'label' => 'favourites',
			'icon' => SvgLoader::load('images/favourites-icon.svg'),
			'route' => 'favourites'
		],
		'about_us' => [
			'label' => 'about_us',
			'icon' => SvgLoader::load('images/about-us-icon.svg'),
			'route' => 'about-us'
		],

	];
@endphp

<div class="sidebar">
	<div class="sidebar-head">
		<a class="sidebar-logo" href="{{ route('home', ['locale' => $currentLocale]) }}">
			<img src="{{asset('images/logo-icon.png')}}" alt="logo-icon">
		</a>
		<button onclick="closeSideBar()" class="close-button">
			{!! $closeSvg !!}
		</button>
	</div>
	<div class="line"></div>
	<div class="sidebar-search">
		<x-search-bar/>
	</div>
	<nav class="navbar-buttons">
		@foreach($navButtons as $navButton)
			<x-navigation.button :icon=" $navButton['icon']" :label="$navButton['label']" :route="$navButton['route']"/>
		@endforeach
	</nav>
</div>
