@php
	use App\Helpers\SvgLoader;
	$arrowForwardSvg = SvgLoader::load('images/arrow-forward-icon.svg');
	$arrowBackSvg = SvgLoader::load('images/arrow-back-icon.svg');
	$sliderImages = [
		0 => 'images/hero-image.webp',
		1 => 'images/hero-slider-2.jpg',
	]
@endphp
<div id="carouselExampleControls" class="carousel slide carousel-container rounded-8" data-bs-ride="carousel">
	<div class="carousel-inner">
		@foreach($sliderImages as $key => $sliderImage)
			<div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
				<img class="d-block w-100" src="{{ asset($sliderImage) }}" alt="slide-{{ $key }}">
			</div>
		@endforeach
	</div>
	<a class="carousel-button carousel-button-prev"
	   href="#carouselExampleControls"
	   role="button"
	   data-bs-slide="prev">
		{!! $arrowBackSvg !!}
	</a>
	<a class="carousel-button carousel-button-next"
	   href="#carouselExampleControls"
	   role="button"
	   data-bs-slide="next">
		{!! $arrowForwardSvg !!}
	</a>
</div>
