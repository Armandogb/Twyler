@extends('master')

@section('title','Welcome!')

@section('content')
	@if (Session::has('flash_message'))
		{{ Session::get('flash_message') }}
	@endif


@stop