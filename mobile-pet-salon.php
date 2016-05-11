<?php 
	require 'includes/globals.php';
	$page_title = 'Mobile Pet Salon';
	$page_id = 'mobile_salon';
	include 'includes/header.php'; 
	include 'includes/navigation.php'; 
?>
<div class="sec">
	<div class="container">
		<h1 class="page-title">Mobile Pet Salon</h1>
		<p class="lead">Our dual mobile pet salons, equipped with cutting edge grooming equipment, allow for the highest level grooming service directly at the convenience of your doorstep.</p>
		<div class="row buf-md">
			<div class="col-md-6">
				<h3>Mobile pet salon highlights</h3>
				<ul>
					<li>Hot and cold water for comfortable bathing temperature</li>
					<li>Heat & air conditioning for comfortable grooming</li>
					<li>Clean and sterile environment. Because your pet deserves a clean place to get a bath and a groom</li>
					<li>Generator/Hybrid Inverter - providing all our electrical needs</li>
					<li>Super suds soap system - ensures a clean well groomed pet</li>
					<li>Cosmos shampoo/conditioner system - quality delivery system</li>
					<li>Forced warm air drying system, NO CAGES</li>
					<li>Centra Vaccum - to cleanup that hair</li>
					<li>Electric/Hydraulic Table - to lift the biggest breeds</li>
					<li>Soothing music - for both your pet and our staff</li>
				</ul>
				<h3>Green Hybrid Technology</h3>
				<p>Our two mobile pet salons are completely green and utilizes hybrid power technology. We pride ourselves on taking this step to help the environment we all share. This hybrid system has been in place for several years and we plan to persue additional green policies in the future.</p>
			</div>
			<div class="col-md-6">
				<?php print '<img class="img-full buf-sm-bottom" src="'.$base_url.'assets/images/mobile-van.png">';?>
				<?php print '<img class="img-full" src="'.$base_url.'assets/images/two-vans.jpg">';?>
			</div>	
		</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>