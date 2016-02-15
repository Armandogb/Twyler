@extends('master')

@section('title','Home')

@section('content')
	<section>
		<div class="user-p">
		</div>
		<div class="user-action">
			@if (Session::has('flash_message'))
				<div class="flash-m">
					<h1>{{ Session::get('flash_message') }}</h1>
				</div>
			@endif

			<form method="post" action="/make/twyl">
				<input type="text" name="twyl" placeholder="Twyl">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="submit" value="Twyl!">
			</form>

			@foreach ($feed as $tw)
				<p>{{ $tw->user->name }}</p>
				<p>{{ $tw->user->screen_name }}</p>
				<p>{{ $tw->created_at }}</p>
			    <p>{{ $tw->text }}</p>
			@endforeach

		</div>			
	</section>
@stop