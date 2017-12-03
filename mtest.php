<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="author" content="Michael Brooks, Esteban Perez">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
		<title>Amarin Thai</title>
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>
	<style>
		body{
			font-family: "Montserrat", sans-serif;

		}
		nav{
			height:170px;
			line-height: 170px;
			background-color: transparent;
			position:absolute;
			padding-left:20px;
			padding-right:20px;
			z-index:10000;
		}
		.jumbotron{
			height:95vh;
			position: relative;
			background:url(./wood.jpg);
			background-color: #4a3a30;
			background-size: cover;
			padding-top: 20px;

		}
		.white-text{
			color:white;
		}
		.valign{
			display: flex;
			align-items:center;
			justify-content: center;
		}
		nav ul a{
			font-size: 1.5rem;

		}
		nav ul a:hover{
			transition: color .3s;
			color:aqua;
			background-color:transparent;

		}
		.heroImg{
			vertical-align: bottom;
			max-width: 100%;
			height: auto;
			position:absolute;
			bottom:0;
			left: 50%;
			transform: translate(-50%,0);
		}
		.bigText{
			color:white;
			text-align:center;
			font-size: 5.6875rem;
			font-weight: 900;
			text-transform: uppercase;
			letter-spacing: 4px;
			line-height: 1;
		}
		.secondSection{
			background: url(./texture_pattern_2X.jpg);
			background-color: #4a3a30;
			background-repeat: repeat;
			background-size: auto;
			padding-top: 20px;
			padding-bottom: 20px;
			font-size:1.7rem;
		}
		.menuSection{
			background: url(./character_pattern_2X.jpg);
			background-color: #4a3a30;
			background-repeat: repeat;
			background-size: auto;
			padding-top: 20px;
			padding-bottom: 20px;
			font-size:1.7rem;
		}
		.center {
			text-align: center;
		}
	</style>
	<body>
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="menu.html">Menu</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="something.html">Something</a></li>
					<li><a href="something.html" style="font-size: 1.5rem;"class="waves-effect waves-light btn-large">Order Now</a></li>
				</ul>
			</div>
		</nav>
		<div class="jumbotron">
			<div style="margin-top:170px;">
				<h1 class="bigText">Amarin Thai</h1>
				<p style="color:white; text-align: center;">I like food, I like eating, and I dont' want to deprive myself of good food.</p>
			</div>
			<img class="heroImg center-align" src="http://www.michiramen.com/media/hero-image-2.png" alt="ramen">
		</div>

		<section class="secondSection">
			<div class="container center">
				<h1 style="margin:0;">Welcome to Amarin Thai Cuisine!</h1>
				<br>
				<p style="margin:0;">When you’re craving Thai food, there’s no place that has better tasting and higher quality food than Amarin Thai Cuisine. Whether you’re stopping by for a quick lunch or want catering for your party, we always give you the best service and highest quality food. Stop by at our Prospect Road, San Jose location or give us a call today.</p>
			</div>
		</section>

		<section class="menuSection">
			<div class="container center">
				<h1 style="margin:0;">Welcome to Amarin Thai Cuisine!</h1>
				<br>
				<p style="margin:0;">When you’re craving Thai food, there’s no place that has better tasting and higher quality food than Amarin Thai Cuisine. Whether you’re stopping by for a quick lunch or want catering for your party, we always give you the best service and highest quality food. Stop by at our Prospect Road, San Jose location or give us a call today.</p>
			</div>
		</section>

		<section class="secondSection">
			<div class="container center">
				<h1 style="margin:0;">JOIN US FOR HAPPY HOUR</h1>
				<br>
				<p style="margin:0;">3-6PM / 9-11PM • $1 OFF ALL BEER | WEDNESDAYS 5-11PM • $2 SAKE CARAFFES</p>
			</div>
		</section>




		<footer class="page-footer  grey darken-3">
			<div class="container">
				<div class="row">
					<div class="col l4 s12">
						<h5 class="white-text">Our Location</h5>
						<p class="grey-text text-lighten-4">
							Amarin Thai Cuisine<br>
							5205 Prospect Rd. STE#110<br>
							San Jose CA. 95129<br><br>
							Get directions<br><br>
							(408) 253-8424, (408) 359-2090<br><br>
							info@amarinthaisanjose.com</p>
					</div>
					<div class="col l6 offset-l2 s12">
						<h5 class="white-text">Service Hours</h5>
						<table>
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
	</body>
</html>
