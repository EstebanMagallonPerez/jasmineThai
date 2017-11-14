<?php include("./template/topNav.php"); ?>

<div class="imageBanner">
	<div class="container">
		<h1 class="display-3">Fluid jumbotron</h1>
		<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	</div>
</div>
<br><br>
<div class="container">
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#lunch" role="tab">Lunch</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#dinner" role="tab">Dinner</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#vegitarian" role="tab">Vegitarian</a>
		</li>
	</ul>
	<br><br><br>
	<div class="tab-content">
		<div class="tab-pane active" id="lunch" role="tabpanel">

		</div>
		<div class="tab-pane" id="dinner" role="tabpanel">
			<div class="container" style="overflow: hidden;padding-top:8px;padding-bottom:8px;">
				<div class="menu-item container">
					<div class="top">
						<span>Menu Item</span>
						<span>$6.99</span>
					</div>
					<div class="description">
						<span>This is an example of filler text that you may see to describe an item.</span>
					</div>
				</div>
				<div class="menu-item container">
					<div class="top">
						<span>Menu Item</span>
						<span>$6.99</span>
					</div>
					<div class="description">
						<span>This is an example of filler text that you may see to describe an item.</span>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="vegitarian" role="tabpanel">
		</div>
	</div>
</div>
<script>
	menu.load("lunch","lunch");
</script>


<?php include("./template/botNav.php"); ?>
