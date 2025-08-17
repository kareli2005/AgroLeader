@php
	use App\Helpers\SvgLoader;
	$aboutUsSvg = SvgLoader::load('images/about-us-icon.svg');
	$favouritesSvg = SvgLoader::load('images/favourites-icon.svg');
	$productsSvg = SvgLoader::load('images/products-icon.svg');
	$profileSvg = SvgLoader::load('images/profile-icon.svg');
	$languageSvg = SvgLoader::load('images/language-icon.svg');
@endphp

<div class="header-buttons flex gap-2">
	<x-header.button :icon="$aboutUsSvg" route="about-us"/>
	<x-header.button :icon="$favouritesSvg" route="favourites"/>
	<x-header.button :icon="$productsSvg" route="products"/>
	<x-header.button :icon="$profileSvg" route="profile"/>
	<x-header.button :icon="$languageSvg"/>
</div>
