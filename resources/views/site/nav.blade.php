<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
	<div class="container">
		<a class="navbar-brand" href="#">Macrameconomics</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbar">
			<ul class="navbar-nav mt-2 mt-md-0">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/#portfolio">Portfolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" hrenav-itemf="/contact/#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact/#contact">Contact Us</a>
				</li>
			@guest
				<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			@endguest
			</ul>
			<div class="search-field">
				<input type="search" value="Search">
			</div>
		</div>
	</div>
</nav>