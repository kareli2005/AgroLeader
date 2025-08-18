@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
	<div class="home-container">
		<br/>
		<x-home.hero/>
		<br/>
		<br/>
		<x-home.items-slider title="new_listings"/>
	</div>
	
	<!-- Products Grid -->
	<!-- Pagination -->
	{{--	{{ $products->links() }}--}}

@endsection
