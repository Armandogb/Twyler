<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>Twyler | @yield('title')</title>
  </head>
  <body>
  	<section class="main-wrap">
  		@include('header')

		@yield('content')  		

  	</section>
  </body>
</html>