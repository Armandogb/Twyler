<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Twyler 3.0 | @yield('title')</title>
  </head>
  <body>
  	<section class="main-wrap">
  		@include('header')

		@yield('content')  		

  	</section>
  </body>
</html>