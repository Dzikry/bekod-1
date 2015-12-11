<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
    <meta charset="utf-8">
    <title>Colorful Flat by tB3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="{{ url('css/bootstrap1.min.css') }}" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss"rel="stylesheet" href="{{ url('css/style1.css') }}" type="text/css" media="screen" charset="utf-8" />

	<script src="{{ url('js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('js/jquery.scrollTo-1.4.3.1-min.js') }}" type="text/javascript"></script>
	<script src="{{ url('js/jquery.easing-1.3.min.js') }}"></script>
	<script src="{{ url('js/jquery.easing-1.3.js') }}"></script>
	<script src="{{ url('js/default.js') }}"></script>
	<script src="{{ url('js/bootstrap.js') }}"></script>
	<script src="{{ url('js/npm.js') }}"></script>

	<script type="text/javascript">

	$(document).ready(function() {
	$('#myCarousel').carousel({
	  interval: 7000
	});
	
	});

</script>
</head>

<body>
<header>
<div id="headerSection">
	<div class="container">
	<div class="span3 logo"><a href="#"><img src="{{ url('img/logo1.png') }}" alt="" /></a></div>
		<div class="navbar">	
			<div class="nav-collapse">
				<ul class="nav mynav">
					<li><a href="#ourServices">What we do?</a></li>
					<li><a href="#portfolioSection">Portfolio</a></li>
					<li><a href="#meetourteamSection">Team</a></li>
					<li><a href="#recentpostSection">Blog</a></li>
					<li><a href="#contactSection">Support</a></li>
				</ul>
			</div>
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</button>
		</div>
	</div>
	</div>
</header>
<!--Header Ends================================================ -->
	@yield('content')
</body>
</html>
=======
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
