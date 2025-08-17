@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

    <!-- Slider -->
    <div class="slider">
        @foreach($sliderProducts as $product)
            <div class="slide">
                <img src="{{ $product->images->first()?->url ?? 'placeholder.jpg' }}" alt="{{ $product->title }}">
                <h2>{{ $product->title }}</h2>
            </div>
        @endforeach
    </div>

    <!-- Category Filter -->
    <div class="categories">
        <h3>Categories</h3>
{{--        @foreach($categories as $category)--}}
{{--            <a href="?category={{ $category->id }}">{{ $category->title }}</a>--}}
{{--        @endforeach--}}
    </div>

    <!-- Products Grid -->
    <div class="products-grid">
{{--        @foreach($products as $product)--}}
{{--            <div class="product-card">--}}
{{--                <a href="/products/{{ $product->id }}">--}}
{{--                    <img src="{{ $product->images->first()?->url ?? 'placeholder.jpg' }}" alt="{{ $product->title }}">--}}
{{--                    <h2>{{ $product->title }}</h2>--}}
{{--                    <p>${{ $product->price }}</p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
    </div>

    <!-- Pagination -->
    {{ $products->links() }}

@endsection
