@extends('layouts.app')

@section('content')
    <h1>All Products</h1>
    <div class="products-grid">
        @foreach($products as $product)
            <div class="product-card">
                <a href="/products/{{ $product->id }}">
                    <img src="{{ $product->images->first()?->url ?? 'placeholder.jpg' }}" alt="{{ $product->title }}">
                    <h2>{{ $product->title }}</h2>
                    <p>${{ $product->price }}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection
