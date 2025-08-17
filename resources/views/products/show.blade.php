@extends('layouts.app')

@section('content')
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <img src="{{ $product->images->first()?->url ?? 'placeholder.jpg' }}" alt="{{ $product->title }}">
    <p>Category: {{ $product->category->title }}</p>
@endsection
