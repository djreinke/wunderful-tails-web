<?php 
	require 'includes/globals.php';
	$config["page"]["title"] = 'Services';
	$config["page"]["id"] = 'services';
	include 'includes/header.php'; 
	include 'includes/navigation.php'; 
?>
<div class="sec">
	<div class="container">
	<h1 class="page-title">Our Services</h1>
	<p class="lead">We offer a variety of services including mobile pet grooming, pet deshedding services, and sensitive skincare services that aim to keep your pet clean and healthy.</p>
	<hr>
	<div class="row service-entry">
		<div class="col-md-4"><?php print '<img class="img-full" src="'.$config["urls"]["baseUrl"].'assets/images/home_feat01.jpg" alt="Mobile Dog Grroming Services at Wunderful Tails">';?></div>
		<div class="col-md-8">
			<h3>Mobile Dog Grooming</h3>
			<p>Our mobile grooming service options includes bathing, shampooing, rinsing, conditioner, ear cleaning, trimming, nail filling, and more. No matter what kind of service your dog needs, we offer them all at a price you can afford. In addition to our regular low prices, we sometimes have special discounts and deals that can help you save even more. Our professional groomers have been highly trained in every kind of grooming service and are ready to give your dog loving care.</p>
		</div>
	</div>
	<div class="row service-entry">
		<div class="col-md-4"><?php print '<img class="img-full" src="'.$config["urls"]["baseUrl"].'assets/images/home_feat02.jpg" alt="Pet Deshedding Services at Wunderful Tails">';?></div>
		<div class="col-md-8">
			<h3>Deshedding Service</h3>
			<p>Our professional grooming team members have been highly trained for years and have learned all the proper deshedding techniques necessary. We have worked with all types of coats and know how each one grows and sheds. When we work with your dog, we make sure they are as comfortable as possible. We are careful and take our time with every service we offer because our number one priority is to make your dog feel calm and happy while in our professional care.</p>
		</div>
	</div>
	<div class="row service-entry">
		<div class="col-md-4"><?php print '<img class="img-full" src="'.$config["urls"]["baseUrl"].'assets/images/home_feat03.jpg" alt="Sensitive Skin Care Treatments at Wunderful Tails">';?></div>
		<div class="col-md-8">
			<h3>Sensitive Skin Care Service</h3>
			<p>If your dog has sensitive skin and you come to us for grooming service, we will use the most gentle products and tools we have to make sure your dog's skin reacts in a good way. We guarantee that your dog's skin will always be healthy in our care, and if you have any concerns we will address them as soon as we can. We have dealt with a number of dry skin issues over the years. With our great reputation and dependable staff, we are proud to be able to take care of your pet.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
		<h2>Pricing</h2>
		<p class="lead">Pricing varries depending on the size, breed, weight, the condition of your pet’s coat and service time. Telephone quotes are close estimates and will be confirmed after an initial examination of your pet. Additionally, you may fill out our <?php print '<a href="'.$config["urls"]["baseUrl"].'make-an-appointment">online form to schedule an appointment </a>';?>and help us help you get the best price and best service for your pet.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<h3>Additional service options:</h3> 
			<ul>
				<li>Bathing</li>
				<li>Shampooing</li>
				<li>Emergency Skunk Service</li>
				<li>Rinsing</li>
				<li>Conditioner</li>
				<li>Ear Cleaning</li> 
				<li>Trimming</li> 
				<li>Nail filling</li> 
				<li>Pet Sitting</li> 
			</ul>
		</div>
		<div class="col-md-6">
			<h3>About Our Services</h3>
			<p>No matter what kind of service your dog needs, we offer luxury service at an affordable rate. In addition to our regular low prices, we sometimes have special discounts and deals that can help you save even more. Our professional groomers have been highly trained in every kind of grooming service and are ready to give your dog loving care.</p>
		</div>
	</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>