@php use App\Helpers\SvgLoader; @endphp
@props(['title' => ''])

@php
	$arrowForward = SvgLoader::load('images/arrow-forward-icon.svg');
	$arrowBack = SvgLoader::load('images/arrow-back-icon.svg');
@endphp

<div class="items-slider">
	<div class="items-slider-header">
		<h2>{{ __('messages.' . $title) }}</h2>
		<div class="items-slider-buttons">
			<button>
				{!! $arrowBack !!}
			</button>
			<button>
				{!! $arrowForward !!}
			</button>
		</div>
	</div>
	<div class="items-slider-content">
		<div class="card-container">
			<div class="card-image-container">
				<img src="https://aegisagro.in/wp-content/uploads/2024/06/growup.jpg" alt="img"/>
			</div>
			<div class="card-title">
				<span>New brand name</span>
			</div>
			<button class="cart-button">
				<span>Learn More</span>
			</button>
		</div>
	</div>
</div>