@extends('master')

@section('title','Home')

@section('content')
	<section>
		<div class="user-p">
			<div class="info">
				<h3>@ {{ $user_name }}</h3>
			</div>
			<div class="user-img" style="background-image: url({{ $pro_pic }});">
			</div>
		</div>
		<div class="user-action">
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			@if (Session::has('flash_message'))
				<div class="flash-m">
					<h1>{{ Session::get('flash_message') }}</h1>
				</div>
			@endif

			<form method="post" action="/make/twyl" id="make-twyl">
				<textarea type="text" rows="5" form="make-twyl" name="twyl">Twyl...</textarea>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input type="submit" value="Twyl!">
			</form>

			@foreach ($feed as $tw)
				<div class="twyl-obj">
					<div class="tweet-img" style="background-image: url({{ $tw->user->profile_image_url }});">
					</div>
					<div class="tweet-text">
					<p>{{ $tw->user->name }} @ {{ $tw->user->screen_name }}</p>
					<p>{{ $tw->created_at }}</p>
				    <p>{{ $tw->text }}</p>
					</div>
			    </div>
			@endforeach

		</div>			
	</section>
@stop
