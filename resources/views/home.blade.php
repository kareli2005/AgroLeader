@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
	<div class="home-container">
		<x-carousel.carousel/>
		<x-carousel.products title="new_products"/>
	</div>
	
	<!-- Products Grid -->
	<!-- Pagination -->
	{{--	{{ $products->links() }}--}}

@endsection
