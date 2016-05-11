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
		<div class="row buf-md">
			<div class="col-md-4">
				<p>Lorem ipsum</p>
			</div>
			<div class="col-md-8">
				<?php print '<img class="img-full" src="'.$base_url.'assets/images/mobile-van.png">';?>
			</div>	
		</div>
		<div class="row buf-md">
		<div class="col-md-8">
			<?php print '<img class="img-full" src="'.$base_url.'assets/images/two-vans.jpg">';?>
		</div>
			<div class="col-md-4">
				<p>Test</p>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>