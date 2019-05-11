<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Digital Doctor</title>
<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Sweet Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//meta tags ends here-->
<!--booststrap-->
<link href="{{asset('frontEnd/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" >
<!--//booststrap end-->

<!-- font-awesome icons -->
   <link rel="stylesheet" href="{{asset('frontEnd/')}}/css/font-awesome.min.css" />

<!-- //font-awesome icons -->
<!--stylesheets-->
<link href="{{asset('frontEnd/')}}/css/style.css" rel='stylesheet' type='text/css' media="all">
<link href="{{asset('frontEnd/')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- //pop-ups-->
<link href="{{asset('frontEnd/')}}/css/lsb.css" rel="stylesheet" type="text/css"> <!--gallery lsb-->

<link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
<!--//style sheet end here-->
</head>
<body>
		<div class="header-w3layouts">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top top-nav-collapse">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="{{url('/')}}">Digital Doctor
			</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
					<li><a class="page-scroll" href="#home">Home</a></li>
					<li><a class="page-scroll scroll" href="#about">About</a></li>
					<li><a class="page-scroll scroll" href="#gallery">Services</a></li>
					<li><a class="page-scroll scroll" href="#team">Doctors</a></li>
					<li><a class="page-scroll scroll" href="#team">  <div class="collapse navbar-collapse" id="navbarSupportedContent">
								<!-- Left Side Of Navbar -->
								<ul class="navbar-nav mr-auto">

								</ul>

								<!-- Right Side Of Navbar -->
								<ul class="navbar-nav ml-auto">
										<!-- Authentication Links -->
										@guest
												<li class="nav-item">
														<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
												</li>
												<li class="nav-item">
														<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
												</li>
										@else
											<li class="nav-item">
													<a class="nav-link" href="{{ route('register') }}">{{ __('Message') }}<span>0</span></a>
											</li>
												<li class="nav-item dropdown">
														<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																{{ Auth::user()->name }} <span class="caret"></span>
														</a>

														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
						</div></a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
	<!-- //header -->


		<!--Slider-->
		<div class="slider">
			<div class="callbacks_container w3l">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img w3-oneimg">
						</div>
						<div class="slider-info">
							<h4>Lorem ipsum  amet</h4>
						    <p>Lorem ipsum dolor sit, consectetur adiping elit.</p>

						</div>
					</li>
					<li>
						<div class="slider-img w3-twoimg">
						</div>
						<div class="slider-info">
							<h4>Dolor sit hatant morbi </h4>
							<p>Quis autem vel eum iure reprehenderit quivol.</p>
						</div>
					</li>
					<li>
						<div class="slider-img w3-threeimg">
						</div>
						<div class="slider-info">
							<h4>Quis autem ve eum iure</h4>
							<p>Excepteur sint ocecat cupid proident, deserunt.</p>
						</div>
					</li>
					<li>
						<div class="slider-img w3-fourimg">
						</div>
						<div class="slider-info">
							<h4>Voluptate velit esse</h4>
							<p>Quis autem velreprehenderit qui ea.eum iure</p>
						</div>
					</li>

				</ul>

			</div>
			<div class="clearfix"></div>
		</div>
		<!--//Slider-->
@include('frontEnd.includes.about')
 <!-- Stats -->
	<div class="stats-agileits" id="stats">
	       <div class="container">
		   <h3 class="title-w3-agile">Stats</h3>
		<div class="stats-info agileits w3layouts">
				<div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-1">
				<div class=" agileits-w3layouts counter">{{$doctor}}</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Doctors</h4>
				</div>
</div>
			<div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-2">

				<div class=" agileits-w3layouts counter">{{$client}}</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts ">Patients</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-3">

				<div class=" agileits-w3layouts counter" >{{$app}}</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts ">Appointments</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-4">
<?php $user = \App\User::count(); ?>
				<div class=" agileits-w3layouts counter">{{$user}}</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">User</h4>
				</div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>


<!--//video-->
<!-- gallery -->
@include('frontEnd.includes.service')
	<!-- //gallery -->


		<!-- team -->
	@include('frontEnd.includes.doctors')
 	<!-- //team-->
<!--contact -->


	<!--//contact -->
<!--footer-->
@include('frontEnd.includes.footer')
<!--//footer-->
<!--menu script-->
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquery-2.2.3.min.js'></script>
<script type="text/javascript" src="{{asset('frontEnd/')}}/js/modernizr-2.6.2.min.js"></script>
	<script src="{{asset('frontEnd/')}}/js/bootstrap.min.js"></script>
<!--//menu script-->
<!-- banner-->
<script src="{{asset('frontEnd/')}}/js/responsiveslides.min.js"></script>
		<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						pager: true,
						nav: true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="{{asset('frontEnd/')}}/js/jquery.waypoints.min.js"></script>
	<script src="{{asset('frontEnd/')}}/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--pop-up-box video-->
					<script src="{{asset('frontEnd/')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});

					});
					</script>
<!-- //pop-up-box video -->
	<!-- gallery-lightbox -->
	<script src="{{asset('frontEnd/')}}/js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
	<!-- //gallery-lightbox -->
				<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{asset('frontEnd/')}}/js/move-top.js"></script>
			<script type="text/javascript" src="{{asset('frontEnd/')}}/js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- start-smoth-scrolling -->

		<!-- for-bottom-to-top smooth scrolling -->
			<script type="text/javascript">
				$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
					};
				*/
				$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //for-bottom-to-top smooth scrolling -->
</body>
</html>
