@extends('master')

@section('title','Login')
	
@section('content')

	<form method="get" action="/user/verify">
		<input type="text" name="email" placeholder="E-Mail">
		<input type="password" name="password" placeholder="Password">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit">
	</form>

	@if (Session::has('flash_message'))
		{{ Session::get('flash_message') }}
	@endif


@stop