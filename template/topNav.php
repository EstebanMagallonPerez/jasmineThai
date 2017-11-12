<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<style>

			@media (min-width: 992px) {
				.navbar{
					position: absolute;
					left: 50%;
					transform: translate(-50%,0px);
				}
				.navbar-nav {
					float:none;
					margin:0 auto;
					display: block;
					text-align: center;
					background: transparent;

				}

				.navbar-nav > li, .navbar-brand{
					display: inline-block;
					float:none;
					height: 60px;
					line-height: 60px;
					text-align: center;
					font-size: 30px;
				}

			}
			.imageBanner
			{
				height: 90%;
				width: 100%;
				background-image:url(./assets/banner.jpg);
				background-repeat:no-repeat;
				background-position:center;
				background-size: cover;
			}
			body, html{
				height: 100%;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-toggleable-md navbar-light">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="navbar-brand" href="#">
							<img src="./assets/icon.svg" width="60" height="60" class="d-inline-block align-top" alt="">
							Icon
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Location</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- jQuery first, then Tether, then Bootstrap JS. -->
