<header>
	<section class="logo-bar">
		<div class="logo">
			<div class="mouse">
			</div>
			<div class="text">
				<h1>Twyler</h1>
			</div>
		</div>
		<div class="logio">
			@if (Session::has('access_token'))
				<a href="/logout">Logout</a>
			@else
				<a href="/user/verify">Login</a>
			@endif
		</div>
	</section>
</header>  	