<?php
// Template Name: ACH Auth
?>
<?php get_header(); ?>


<?php
// Custom Fields
$intro_text = get_field('intro_text');
$terms_conditions = get_field('terms_conditions');
$ach_fee = get_field('ach_fee');
?>

<div class="page-content ACH-Auth">
	<div class="form-container">
		<div class="intro mb-s mx-auto p-2">
			<h1>ACH Authorization Form</h1>
			<?php echo $intro_text; ?>
		</div>
		<form id="ach-form" action="<?php echo get_template_directory_uri(); ?>/ach-submit.php" method="POST">
			<div class="form-group">
				<div class="form-row">
					<div class="col-lg-12">
						<label class="sr-only" for="nameInstitution">Name of Financial Institution</label>
						<input type="text" class="form-control" name="nameInstitution" id="nameInstitution" placeholder="Name of Financial Institution">
					</div>
					<div class="col-12">
						<label class="sr-only" for="streetInstitution">Institution Street Address</label>
						<input type="text" class="form-control" name="streetInstitution" id="streetInstitution" placeholder="Institution Street Address">
					</div>
					<div class="col-12">
						<label class="sr-only" for="streetInstitution2">Address 2 (Apartment, studio, floor)</label>
						<input type="text" class="form-control" name="streetInstitution2" id="streetInstitution2" placeholder="Institution Address 2 (Apartment, studio, floor)">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="cityInstitution">City</label>
						<input type="text" class="form-control" name="cityInstitution" id="cityInstitution" placeholder="City">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="stateInstitution">State</label>
						<select class="form-control" name="stateInstitution" id="stateInstitution">
							<option value="ME">Maine</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="zipInstitution">Zip</label>
						<input type="text" class="form-control" name="zipInstitution" id="zipInstitution" placeholder="Zip">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="accountNumber">Checking/Savings Account Number</label>
						<input type="text" class="form-control" name="accountNumber" id="accountNumber" placeholder="Checking/Savings Account Number">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="routingNumber">Account Routing Number</label>
						<input type="text" class="form-control" name="routingNumber" id="routingNumber" placeholder="Account Routing Number">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="Account Type">Account Type:</label>
						<select class="form-control" id="accountType" name="accountType">
							<option value="default" disabled selected>Account Type:</option>
							<option value="Checking">Personal Checking</option>
							<option value="Checking">Business Checking</option>
							<option value="Savings">Personal Savings</option>
							<option value="Savings">Business Savings</option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="withdrawAmount">Select amount to withdraw:</label>
						<select class="form-control" id="withdrawAmount" name="withdrawAmount">
							<option value="Set">Set amount: </option>
							<option value="Maxiumum">Maximum amount: </option>
							<option value="Maxiumum">Amount of each delivery: </option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="amount">Enter amount</label>
						<input type="number" class="form-control" name="amount" id="amount" placeholder="Enter amount">
					</div>
					<div class="col-12 mt-5">
						<label class="sr-only" for="streetAddress">Your street Address</label>
						<input type="text" class="form-control" name="streetAddress" id="streetAddress" placeholder="Your Street Address">
					</div>
					<div class="col-12">
						<label class="sr-only" for="streetAddress2">Address 2 (Apartment, studio, floor)</label>
						<input type="text" class="form-control" name="streetAddress2" id="streetAddress2" placeholder="Address 2 (Apartment, studio, floor)">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="city">City</label>
						<input type="text" class="form-control" name="city" id="city" placeholder="City">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="state">State</label>
						<select class="form-control" name="state" id="state">
							<option value="ME">Maine</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="zip">Zip</label>
						<input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
					</div>
					<div class="p-1 w-100 mt-3">
						<div class="terms-conditions">
							<?php echo $terms_conditions; ?>
						</div>
						<p class="center"><?php echo $ach_fee ?></p>
					</div>
					<div class="col-lg-12">
						<label class="sr-only" for="email">Email Address</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
					</div>
					<div class="col-lg-12">
						<label class="sr-only" for="nameSignature">Enter Full Name</label>
						<input type="text" class="form-control" name="nameSignature" id="nameSignature" placeholder="Enter Full Name">
					</div>
					<div class="col-12">
						<input class="form-check-input" id="signatureAuthorization" name="signatureAuthorization" type="checkbox" value="Applicant DOES AGREE to terms and conditions.">
						<label for="signatureAuthorization" class="mx-4">I acknowledge that I have read and understand the disclosures.</label>
					</div>
					<div class="ml-auto p-1">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php get_footer(); ?>