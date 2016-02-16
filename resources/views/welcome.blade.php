@extends('master')

@section('title','Welcome!')

@section('content')

	<section>
		@if (Session::has('flash_message'))
			<div class="flash-m">
				<h1>{{ Session::get('flash_message') }}</h1>
			</div>
		@endif

		<div class="mouse-circle">
			<div class="giant-mouse">
				<div class="quote">
				</div>
			</div>
		</div>
	</section>

@stop