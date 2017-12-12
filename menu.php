<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>Amarin Thai Cuisine</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"/>
		<meta name="description" content="Dank Thai Food">
		<link rel="icon" href="./logo-amarin-web-iloveimg-cropped.png">
		<meta name="author" content="Michael Brooks, Esteban Perez">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />-->

		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<!-- Compiled and minified JavaScript -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<style>
		/*
		.tabs .tab a{
		font-size: 1.8rem;
		font-weight:700;
		color:white !important;
		}
		.tabs .tab a:hover{
		transition: color .3s;
		color:aqua;
		background-color:transparent;
		}*/
		.tabs
		{
			background: transparent;
		}
		.tabs .tab a
		{
			color: white;
		}
		.tabs .tab a.active,.tabs .tab a:hover
		{
			color: aqua;
		}
		.tabs .indicator
		{
			background-color: aqua;
		}
	</style>
	<body>
		<nav>
			<div class="nav-wrapper">
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="brand-logo center hide-on-med-and-down">
					<li><a href="#!"><img src="./logo-amarin-web-iloveimg-cropped.png" alt="Amarin Logo"></a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="menu.php">Menu</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
		</nav>
		<div class="jumbotron">
			<div style="margin-top:30vh;">
				<div class="container">
					<h1 class="bigText">Amarin Thai</h1>
					<p class="kindOfBigText">I like food, I like eating, and I dont' want to deprive myself of good food.</p>
				</div>
			</div>
			<img class="heroImg center-align" src="http://www.michiramen.com/media/hero-image-2.png" alt="ramen">
		</div>

		<section class="secondSection">
			<div class="container center">
				<h1 style="margin:0;">Welcome to<br>Amarin Thai Cuisine!</h1>
				<br>
				<p style="margin:0;">When you’re craving Thai food, there’s no place that has better tasting and higher quality food than Amarin Thai Cuisine. Whether you’re stopping by for a quick lunch or want catering for your party, we always give you the best service and highest quality food. Stop by at our Prospect Road, San Jose location or give us a call today.</p>
			</div>
		</section>

		<section class="menuSection">
			<div class="container center">
				<h1 style="margin:0;">Our Menu</h1>
				<br>
				<div class="row">
					<div class="col s12">
						<ul class="tabs">
							<li class="tab col s4"><a href="#lunch">Lunch</a></li>
							<li class="tab col s4"><a class="active" href="#test2">Test 2</a></li>
							<li class="tab col s4"><a href="#test4">Test 4</a></li>
						</ul>
					</div>
					<div id="lunch" class="col s12">Test 1</div>
					<div id="test2" class="col s12">Test 2</div>
					<div id="test4" class="col s12">Test 4</div>
				</div>
				<br>
				<a class="waves-effect waves-light btn center">View Our Full Menu</a>
			</div>
		</section>

		<section class="secondSection">
			<div class="container center">
				<h1 style="margin:0;">JOIN US FOR HAPPY HOUR</h1>
				<br>
				<p style="margin:0;">3-6PM / 9-11PM • $1 OFF ALL BEER | WEDNESDAYS 5-11PM • $2 SAKE CARAFFES</p>
			</div>
		</section>


		<div class="row" style="margin:0; padding:0;">
			<div class="col m4 s12" style="margin:0; padding:0;"><img class="imageBanner" src="./Spices.jpg" alt="Spices"></div>
			<div class="col m4 s12 hide-on-small-only" style="margin:0; padding:0;"><img class="imageBanner" src="./Broth.jpg" alt="Spices"></div>
			<div class="col m4 s12 hide-on-small-only" style="margin:0; padding:0;"><img class="imageBanner" src="./Mochi.jpg" alt="Spices"></div>

		</div>


		<footer class="page-footer  grey darken-3">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Our Location</h5>
						Call Us At:<br>
						(408) 253-8424<br>
						info@amarinthaisanjose.com
						<p class="grey-text text-lighten-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.8326522275676!2d-121.99248332099643!3d37.29278537589865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb5559167bb75%3A0x359596cecb4abebc!2sAmarin+Thai+Cuisine!5e0!3m2!1sen!2sus!4v1512267648897" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</p>
					</div>
					<div class="col l6 s12">
						<h5 class="white-text">Service Hours</h5>
						<table class="">
							<thead>
								<tr>
									<th>Day</th>
									<th>Lunch</th>
									<th>Dinner</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>Mon - Thur</td>
									<td>11:30 AM - 3 PM</td>
									<td>5 - 9:30 PM</td>
								</tr>
								<tr>
									<td>Fri</td>
									<td>11:30 AM - 3 PM</td>
									<td>5 - 10 PM</td>
								</tr>
								<tr>
									<td>Sat</td>
									<td>12 - 3 PM</td>
									<td>5 - 10 PM</td>
								</tr>
								<tr>
									<td>Sun</td>
									<td>12 - 3 PM</td>
									<td>5 - 9:30 PM</td>
								</tr>
							</tbody>
						</table>
						<p>*Opens 7 days a week, closes between 3-5PM</p>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					© 2015 Amarin Thai Cuisine (Prospect Rd. San Jose, CA). All Rights Reserved. : Developed by Give Me A Job
				</div>
			</div>
		</footer>
		<script src="./js/script.js"></script>
		<script>
			menu.load("lunch","lunch");
			$(".button-collapse").sideNav();
		</script>
	</body>
</html>
