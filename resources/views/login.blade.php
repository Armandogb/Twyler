@extends('master')

@section('title','Login')
	
@section('content')

<?php print_r(json_decode(Twitter::getHomeTimeline(['count' => 30, 'format' => 'json']))); ?>

@stop