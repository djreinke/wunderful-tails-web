<?php 
	require 'includes/globals.php';
	$page_title = 'Make an Appointment';
	$page_scripts[0] = "assets/js/appointment-checker.js";
	include 'includes/header.php'; 
	include 'includes/navigation.php'; 
?>
<div class="sec">
<div class="container">
	<h1 class="page-title">Make An Appointment</h1>
	<p class="lead">Please fill out the form below to make an appointment for our mobile pet salon.</p>
	<p>If you encounter any problems or would like to speak with us directly please call - <?php echo $phone;?></p>
	<?php 
		if( isset($_GET['status']) ){
			if( $_GET['status'] == "failure"){

				echo '<br><div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> We\'re sorry, we ran into an error and could not confirm your appointment. Please try again. 
</div>';
			}
		} 
	?>
	<div class="make-an-appointment-wrap col-md-9">
		<form action="functions/mail.php" method="post" id="make-appointment">
			<h3>Primary Contact Info.</h3>
			<div class="form-group">
			    <label class="control-label" for="first-name">First Name <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="first-name" placeholder="First Name" name="first-name" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="last-name">Last Name <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="last-name" placeholder="Last Name" name="last-name" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="cell-phone">Cell Phone</label>
				<input type="phone" class="form-control" id="cell-phone" placeholder="000-000-0000">
			</div>
			<div class="form-group">
				<p>Can we text you to confirm your appointment?</p>
				<label class="radio-inline">
  					<input type="radio" name="send-text-confirmation" id="text-me-yes" value="yes"> Yes
				</label>
				<label class="radio-inline">
				  <input type="radio" name="send-text-confirmation" id="text-me-no" value="no"> No, don't ever text me!
				</label>
			</div>
			<div class="form-group">
				<label class="control-label" for="home-phone">Home Phone <span class="form-required">*</span></label>
				<input type="phone" class="form-control" id="home-phone" placeholder="000-000-0000" name="home-phone" required>
			</div>
			<div class="form-group">
			    <label class="control-label" for="email">Email <span class="form-required">*</span></label>
				<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="address">Address <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="city">City <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="city" placeholder="City" name="city" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="zip">Zip Code <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="zip" placeholder="Zip Code" name="zip" equired>
			</div>
			<div class="form-group">
				<p>Is the address the same if entered into GPS?</p>
				<label class="radio-inline">
  					<input type="radio" name="is-address-same-in-gps" id="inlineRadio1" value="yes"> Yes
				</label>
				<label class="radio-inline">
				  <input type="radio" name="is-address-same-in-gps" id="inlineRadio2" value="no"> No
				</label>
			</div>
			<div class="form-group">
				<label for="gate-code">Gate code <span class="text-muted">(if applicable)</span></label>
				<input type="text" class="form-control" id="gate-code" name="gate-code" placeholder="Gate Code">
			</div>
			<div class="form-group">
				<label for="garrage-code">Garage code <span class="text-muted">(if applicable)</span></label>
				<input type="text" class="form-control" id="garrage-code" name="garrage-code" placeholder="Garrage Code">
			</div>
			<h3>Secondary Contact Info.</h3>
			<div class="form-group">
			    <label for="contact-second-name">Second contact name</label>
				<input type="text" class="form-control" id="contact-second-name" name="second-contact-name" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="contact-second-relation">Relationship</label>
				<input type="text" class="form-control" id="contact-second-relation" name="second-contact-relation" placeholder="Relationship">
			</div>
			<div class="form-group">
				<label for="contact-second-phone">Phone Number</label>
				<input type="phone" class="form-control" name="second-contact-phone" id="contact-second-phone" placeholder="000-000-0000">
			</div>
			<div class="form-group">
			    <label for="contact-third-name">Third contact name</label>
				<input type="text" name="third-contact-name" class="form-control" id="contact-third-name" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="contact-third-relation">Relationship</label>
				<input type="text" name="third-contact-relation" class="form-control" id="contact-third-relation" placeholder="Relationship">
			</div>
			<div class="form-group">
				<label for="contact-third-phone">Phone Number</label>
				<input type="phone" name="third-contact-phone" class="form-control" id="contact-third-phone" placeholder="000-000-0000">
			</div>
			<div class="form-group">
				<label for="contact-additional">Additional Contact Info</label>
				<textarea class="form-control" name="additional-contact-info" rows="3"></textarea> 
			</div>
			<h3>Vet Information</h3>
			<div class="form-group">
			    <label for="vet-clinic">Name of Vet or Clinic</label>
				<input type="text" class="form-control" id="vet-clinic" placeholder="Vet/Clinic">
			</div>
			<div class="form-group">
				<label for="vet-city">City</label>
				<input type="text" class="form-control" id="vet-city" placeholder="City">
			</div>
			<div class="form-group">
				<label for="vet-phone">Phone</label>
				<input type="phone" class="form-control" id="vet-phone" placeholder="000-000-0000">
			</div>
			<div class="form-group">
				<button id="make-appointment-submit" type="submit" class="btn btn-primary btn-lg buf-sm">Make Appointment</button>
			</div>
		</form>
	</div>		
</div>
</div>
<?php include 'includes/footer.php'; ?>