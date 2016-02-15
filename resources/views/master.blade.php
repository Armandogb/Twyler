<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>Twyler | @yield('title')</title>
  </head>
  <body>
  	<section class="main-wrap">
  		@include('header')

		@yield('content')  		

  	</section>
 <script src="{{ asset("js/app.js") }}"></script>
  </body>
</html>