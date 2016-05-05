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
			<h3>Secondary Contact Info. (optional)</h3>
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
			<h3>Vet Information (optional)</h3>
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
			<h3>Pet Info</h3>
			<div class="form-group">
			    <label class="control-label" for="pet-name">Pet Name <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="pet-name" placeholder="Pet Name" name="pet-name" required>
			</div>
			<div class="form-group">
			    <label class="control-label" for="pet-name">Breed/Mix <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="breed-mix" placeholder="Breed/Mix" name="breed-mix" required>
			</div>
			<div class="form-group">
			    <label class="control-label" for="pet-birthday">Pet Birthday <span class="form-required">*</span></label>
				<input type="date" class="form-control" id="pet-birthday" name="pet-birthday" required>
			</div>
			<div class="form-group">
			    <label class="control-label" for="pet-weight">Approx. Weight (lbs) <span class="form-required">*</span></label>
				<input type="number" class="form-control" id="pet-weight" placeholder="0" name="pet-weight" required>
			</div>
			<div class="form-group">
				<p>Sex of Pet: <span class="form-required">*</span></p>
				<label class="radio-inline">
  					<input type="radio" name="pet-sex" id="pet-male" value="male"> Male
				</label>
				<label class="radio-inline">
				  <input type="radio" name="pet-sex" id="pet-female" value="female"> Female
				</label>
			</div>
			<div class="form-group">
			    <label class="control-label" for="pet-last-grooming">Time of last professional grooming: <span class="form-required">*</span></label>
				<input type="text" class="form-control" id="pet-last-grooming" placeholder="August 1, 2016 / Never" name="pet-last-grooming" required>
			</div>
			<div class="form-group">
				<label for="pet-health-concern">Pet health concerns (allergies, Arthritis, Blind/Deaf, Siezures, etc.)</label>
				<textarea class="form-control" name="pet-health-concerns" rows="3"></textarea> 
			</div>
			<div class="form-group">
				<label for="pet-grooming-concern">Grooming concerns (known grooming behaviors, nervous for nails, bites at dryer, etc.)</label>
				<textarea class="form-control" name="pet-grooming-concerns" rows="3"></textarea> 
			</div>
			<div class="form-group">
				<label for="pet-additional-notes">Additional notes (any other information/requests; no perfumes, etc)</label>
				<textarea class="form-control" name="pet-additional-notes" rows="3"></textarea> 
			</div>
			<div class="buf-md">
				<h4>Read and accept policies and procedures</h4>
				<!-- Modal trigger -->
				<a href="#" data-toggle="modal" data-target="#policies-procedures">
				  Please click here to read and accept the policies and procedures
				</a><span class="form-required">*</span>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="policies-procedures" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Policies and Procedures</h4>
			      </div>
			      <div class="modal-body" id="policies-procedures-wrap">
			      <p><ul>
				      <li>All appointment times are approximate. Due to the unpredictability of live animals, traffic, weather, etc, usually a half-hour window for arrival time will be given. If we are running more than 15 minutes outside the window we will call or text you.</li>
				      <li>Please be home for the entire arrival window. If no one is home and the pet is unavailable, the appointment will be considered forfeit after 15 minutes and need to be rescheduled. A no-show cancellation fee of the full cost of the appointment may apply.</li>
				      <li>Reminder emails or text messages are sent out two days before your appointment. If you need to cancel or reschedule, please contact us as soon as possible. Appointments cancelled with less than 24 hours notice may be charged a $50 cancellation fee.</li>
				      <li>You don’t need to be home for your pet’s grooming appointment! Arrange with us a key or code and we can groom your pet while you’re out. Feel free to run errands or go to work without worrying about your pet missing their appointment.</li>
				      <li>Payment is due at time of service. Acceptable forms of payment are cash, check, and credit card. Credit card payments include Sales tax and a 3.5% convenience fee. Online invoicing and automatic payment schedules are available.</li>
				      <li>All grooms include nails trimmed, ears cleaned, bath, fluff dry, and brush out. If it is determined to be unsafe or inhumane to provide a service it will be stopped. If any infections, allergies, suspicious lumps or bumps are found we will let you know!</li>
				      <li>Matted pets may be given a humane smoothie clip. Matts often cover up skin conditions such as infections, allergies, hot spots; also general irritation from the skin being pulled and restricted air flow. Matts also damage the fur, and dematting may damage it further, causing it to be more prone to matt again. Dematting is done at the groomer’s discretion.</li>
				      <li>Pets that bite or exhibit unsafe behaviors may be refused.</li>
				      <li>Pictures may be taken during your pets grooming and used as promotional material. If you do not wish your pet to have pictures taken, please let us know.</li>
			      </ul></p>
			      </div>
			      <div class="modal-footer">
			      <div class="checkbox">
				    <label class="control-label">
				      <input type="checkbox" name="accept-policies-procedures" value="yes" required> I have read and accept the policies and procedures.
				    <span class="form-required">*</span>
				    </label>
				  </div>
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div> <!-- end modal -->
			<div class="form-group">
				<button id="make-appointment-submit" type="submit" class="btn btn-primary btn-lg buf-sm">Make Appointment</button>
			</div>

		</form>
	</div>	
	<div class="col-md-3">
	</div>	
</div>
</div>
<?php include 'includes/footer.php'; ?>