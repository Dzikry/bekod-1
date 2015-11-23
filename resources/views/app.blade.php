<!DOCTYPE html>
<html lang="en">
<head>
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