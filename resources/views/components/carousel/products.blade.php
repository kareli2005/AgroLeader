@php use App\Helpers\SvgLoader; @endphp
@props(['title' => ''])

@php
	$arrowForward = SvgLoader::load('images/arrow-forward-icon.svg');
	$arrowBack = SvgLoader::load('images/arrow-back-icon.svg');
	$sliderID = 'slider-products-' . $title
@endphp

<div class="slider-products">
	<div class="slider-products-header">
		<h2 class="slider-products-title">{{ __('messages.' . $title) }}</h2>
		<div class="slider-products-buttons">
			<button onclick="sliderBack('{{$sliderID.'-items'}}')"
			        class="slider-products-button rounded-circle border-main">
				{!! $arrowBack !!}
			</button>
			<button onclick="sliderNext('{{$sliderID.'-items'}}')"
			        class="slider-products-button rounded-circle border-main">
				{!! $arrowForward !!}
			</button>
		</div>
	</div>
	<div class="slider-products-items-wrapper">
		<div id="{{ $sliderID. '-items' }}" class="slider-products-items">
			<div class="slider-product-item">
				Product 1
			</div>
			<div class="slider-product-item">
				Product 2
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
			<div class="slider-product-item">
				Product 3
			</div>
		</div>
	</div>
</div>