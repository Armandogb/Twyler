<header>

	@if (Session::has('access_token'))
		<a href="/logout">Logout</a>
	@else
		<a href="/user/verify">Login</a>
	@endif

</header>  	