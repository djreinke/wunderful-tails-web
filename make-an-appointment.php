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
	<div class="make-an-appointment-wrap col-md-9">
		<form action="functions/mail.php" id="make-appointment">
			<h3>Primary Contact Info.</h3>
			<div class="form-group">
			    <label class="control-label" for="first-name">First Name <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="first-name" placeholder="First Name" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="last-name">Last Name <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="last-name" placeholder="Last Name" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="cell-phone">Cell Phone</label>
				<input type="phone" class="form-control" id="cell-phone" placeholder="000-000-0000">
			</div>
			<div class="form-group">
				<p>Can we text you to confirm your appointment?</p>
				<label class="radio-inline">
  					<input type="radio" name="inlineRadioOptions" id="text-me-yes" value="text-me-yes"> Yes
				</label>
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="text-me-no" value="text-me-no"> No, don't ever text me!
				</label>
			</div>
			<div class="form-group">
				<label class="control-label" for="home-phone">Home Phone <span class="form-required">*</span></label>
				<input type="phone" class="form-control" id="home-phone" placeholder="000-000-0000" required>
			</div>
			<div class="form-group">
			    <label class="control-label" for="email">Email <span class="form-required">*</span></label>
				<input type="email" class="form-control" id="email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="address">Address <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="address" placeholder="Address" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="city">City <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="city" placeholder="City" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="zip">Zip Code <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="zip" placeholder="Zip Code" required>
			</div>
			<div class="form-group">
				<p>Is the address the same if entered into GPS?</p>
				<label class="radio-inline">
  					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
				</label>
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> No
				</label>
			</div>
			<div class="form-group">
				<label for="gate-code">Gate code <span class="text-muted">(if applicable)</span></label>
				<input type="text" class="form-control" id="gate-code" placeholder="Gate Code">
			</div>
			<div class="form-group">
				<label for="garrage-code">Garage code <span class="text-muted">(if applicable)</span></label>
				<input type="text" class="form-control" id="gate-code" placeholder="Garrage Code">
			</div>
			<h3>Secondary Contact Info.</h3>
			<div class="form-group">
			    <label for="contact-second-name">Second contact name</label>
				<input type="text" class="form-control" id="contact-second-name" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="contact-second-relation">Relationship</label>
				<input type="text" class="form-control" id="contact-second-relation" placeholder="Relationship">
			</div>
			<div class="form-group">
				<label for="contact-second-phone">Phone Number</label>
				<input type="phone" class="form-control" id="contact-second-phone" placeholder="000-000-0000">
			</div>
			<div class="form-group">
			    <label for="contact-third-name">Third contact name</label>
				<input type="text" class="form-control" id="contact-third-name" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="contact-third-relation">Relationship</label>
				<input type="text" class="form-control" id="contact-third-relation" placeholder="Relationship">
			</div>
			<div class="form-group">
				<label for="contact-third-phone">Phone Number</label>
				<input type="phone" class="form-control" id="contact-third-phone" placeholder="000-000-0000">
			</div>
			<div class="form-group">
				<label for="contact-additional">Additional Contact Info</label>
				<textarea class="form-control" rows="3"></textarea> 
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