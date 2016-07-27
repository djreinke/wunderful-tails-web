<?php 
	require 'includes/globals.php';
	$config["page"]["title"] = 'Mobile Grooming Cruise 2018';
	$config["page"]["id"] = 'about';
	include 'includes/header.php'; 
	include 'includes/navigation.php'; 
?>
<div class="sec">
	<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1 class="page-title">Mobile Grooming Cruise, 2018</h1>
			<p class="lead">Experience the all inclusive mobile grooming expo at sea!</p>
            <p>Get ready to experience and learn from some of the best in this multi billion dollar industry. Everything from equipment to the most suitable mobile units available today.</p>
            <p>This exciting cruise event will be Hosted by Eric & Kelli Wunder, Owner & Operators of Wunderful Tails Mobile Pet Salon.</p>
            <p><strong><?php print '<a href="'.$config["urls"]["baseUrl"].'assets/pdf/wunderful-tails-groomer-cruise-2018.pdf" target="_blank">Please download the Mobile Groomer Cruise PDF here</a>';?></strong> if you have trouble seeing it below.</p>
            <br>
			<!--<?php print '<img src="'.$config["urls"]["baseUrl"].'assets/images/wunderful-tails-groomer-cruise-2018.jpg" class="img-full" alt="Wunderful Tails Groomer Cruise 2018">';?>-->
			<?php print '<iframe id="grooming-cruise-pdf" src="http://docs.google.com/gview?url=http://wunderfultails.com/assets/pdf/wunderful-tails-groomer-cruise-2018.pdf&embedded=true" frameborder="0"></iframe>';?>
		</div>
	</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>