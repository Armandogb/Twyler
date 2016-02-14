@extends('master')

@section('title','Home')

@section('content')

	<form method="get" action="/user/verify">
		<input type="text" name="tweet" placeholder="Tweet">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="tweet">
	</form>


{{ $user_name }}

{{ $user_id }}

@foreach ($feed as $tw)
    <p>{{ $tw->text }}</p>
@endforeach

@stop