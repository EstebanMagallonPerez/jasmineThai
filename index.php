<?php include './template/topNav.php' ?>
<div class="jumbotron">
	<div>
		<div class="container">
			<h1 class="bigText">Amarin Thai</h1>
			<p class="kindOfBigText">I like food, I like eating, and I dont' want to deprive myself of good food.</p>
		</div>
	</div>
	<img class="heroImg center-align lazy" data-src="./assets/img/Beam2.png" alt="ramen">
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
					<li class="tab col s4"><a class="active" href="#dinner">Dinner</a></li>
					<li class="tab col s4"><a href="#vegetarian">Vegetarian</a></li>
				</ul>
			</div>
			<div id="lunch" class="col s12">Lunch</div>
			<div id="dinner" class="col s12">Dinner</div>
			<div id="vegetarian" class="col s12">Vegetarian</div>
		</div>
		<br>
		<a class="waves-effect waves-light btn center" href="./menu.php">View Our Full Menu</a>
	</div>
</section>


<div class="row" style="margin:0; padding:0;">
	<div class="col m4 s12" style="margin:0; padding:0;"><img class="imageBanner lazy" data-src="./assets/img/Spices.jpg" alt="Spices"></div>
	<div class="col m4 s12 hide-on-small-only" style="margin:0; padding:0;"><img class="imageBanner lazy" data-src="./assets/img/Broth.jpg" alt="Spices"></div>
	<div class="col m4 s12 hide-on-small-only" style="margin:0; padding:0;"><img class="imageBanner lazy" data-src="./assets/img/Mochi.jpg" alt="Spices"></div>

</div>
<script src="./js/script.js"></script>
<script>
	menu.loadTop("lunch","lunch");
	menu.loadTop("dinner","dinner");
	menu.loadTop("gross","vegetarian");
	$(".button-collapse").sideNav();
</script>
<?php include './template/botNav.php' ?>
