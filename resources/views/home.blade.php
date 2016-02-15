@extends('master')

@section('title','Home')

@section('content')

	@if (Session::has('flash_message'))
		{{ Session::get('flash_message') }}
	@endif

	<form method="post" action="/make/twyl">
		<input type="text" name="twyl" placeholder="Tweet">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" value="Twyl!">
	</form>

@foreach ($feed as $tw)
	<p>{{ $tw->user->name }}</p>
	<p>{{ $tw->user->screen_name }}</p>
	<p>{{ $tw->created_at }}</p>
    <p>{{ $tw->text }}</p>
@endforeach

@stop