<?php include './template/topNav.php' ?>
<style>
	nav{
		height:64px;
		line-height: 64px;
		background-color: #433D3C;
		background-image:none
	}
</style>

<section class="secondSection">
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
	</div>
</section>

<div class="row" style="margin:0; padding:0;">
	<img class="fullWidth" src="./assets/img/toppings-2.jpg" alt="Spices">
</div>

<section class="secondSection">
	<div class="container center">
		<h1 style="margin:0;">JOIN US FOR HAPPY HOUR</h1>
		<br>
		<p style="margin:0;">3-6PM / 9-11PM • $1 OFF ALL BEER | WEDNESDAYS 5-11PM • $2 SAKE CARAFFES</p>
	</div>
</section>


<div class="row" style="margin:0; padding:0;">
	<div class="col m4 s12" style="margin:0; padding:0;"><img class="imageBanner" src="./assets/img/Spices.jpg" alt="Spices"></div>
	<div class="col m4 s12 hide-on-small-only" style="margin:0; padding:0;"><img class="imageBanner" src="./assets/img/Broth.jpg" alt="Spices"></div>
	<div class="col m4 s12 hide-on-small-only" style="margin:0; padding:0;"><img class="imageBanner" src="./assets/img/Mochi.jpg" alt="Spices"></div>

</div>
<script src="./js/script.js"></script>
<script>
	menu.load("lunch","lunch");
	menu.load("dinner","dinner");
	menu.load("gross","vegetarian");
	$(".button-collapse").sideNav();
</script>

<?php include './template/botNav.php' ?>
