@extends('layouts.master')

@section('title','Login')
	
@section('content')

	<form>
		<input type="text" name="email" placeholder="E-Mail">
		<input type="text" name="password" placeholder="Password">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit">
	</form>

@stop