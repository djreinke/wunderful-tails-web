<?php 
	require 'includes/globals.php';
	$page_title = 'Your Appointment Confirmation';
	include 'includes/header.php'; 
	include 'includes/navigation.php'; 
?>
<div class="sec">
	<div class="container">
		<?php 
		if( isset($_GET['status']) ){
			//failure
			if( $_GET['status'] == "failure"){
				if( isset($_GET['customer']) ){
					print '<h1 class="page-title center">Oops, we\'re sorry ' .ucfirst($_GET['customer']).'. Someting went wrong!</h1>';
				}
				else{
					print '<h1 class="page-title center">Oops, we\'re sorry. Something went wrong!</h1>';
				}
				?>
				<p class="lead center">It looks like we had trouble processing your request. We reccomend hitting the back button on your browser to try submitting our form again or calling us at <?php echo $phone; ?>.</p>
				<?php 
					if( isset($_GET['error']) ){
						print '<p class="center"><strong>Error code: </strong>';
						switch ($_GET['error']) {
						    case "mail":
						        print "mail_failure";
						        break;
						    default:
						        print "none";
						}
						print '</p>
								<button type="button" onclick="window.history.back();"class="btn btn-primary btn-lg float-center buf-md">Go Back and Try Again!</button>';
					}
				?>
			<?php					
			}
			// Success
			else if( $_GET['status'] == "success"){
				if( isset($_GET['customer']) ){
					print '<h1 class="page-title">Appointment Confirmation - <span class="success">Thanks '.ucfirst($_GET['customer']).'!</span></h1>';
				}
				else{
					print '<h1 class="page-title">Appointment Confirmation</h1>';
				}
				?>
				<p>Thank you for completing our appointment scheduling form. We've received your submission.</p>
				<hr>
				<div class="col-md-8">
					<h3>What's next?</h3>
					<p class="lead">We will reach out soon with the contact information you provided and <strong>confirm your appointment time.</strong></p>
				</div>
				<div class="col-md-4">
					<h3>Until then, feel free to...</h3>
					<ul>
						<li><a href="https://www.facebook.com/WunderfulTails/" target="_blank">Like and share us on facebook and get the latest updates</a></li>
						<li><a href="http://www.yelp.com/biz/wunderful-tails-mobile-pet-salon-dover" target="_blank">Read some reviews on Yelp</a></li>
						<li>Reach out to us with any questions or concerns at <?php echo $email;?> </li>
						<li>Refer us to your friends!</li>
					</ul>
				</div>
				<?php
			}
		} 
		else{
			print '<h1 class="page-title center">Oops, something went wrong!</h1><p class="lead center">We either had trouble processing your appointment or you reached this page in error.</p>';?>
				<button type="button" onclick="window.history.back();"class="btn btn-primary btn-lg float-center buf-md">Go Back!</button>
			<?php
		}
	?>
	</div>
</div>
<?php include 'includes/footer.php'; ?>