<?php
// Template Name: Sign Up
?>
<?php get_header(); ?>


<?php
// Custom Fields
$intro_text = get_field('intro_text');
$terms_conditions = get_field('terms_conditions');
$email_disclaimer = get_field('email_disclaimer');
?>


<div class="page-content Sign-Up">
	<div class="form-container">
		<div class="intro mb-s mx-auto">
			<h1>New Account Sign-up</h1>
			<?php echo $intro_text ?>
		</div>
		<div class="form-nav">
			<div class="dotted-line"></div>
			<ol class="form-sections">
				<li id="nav-applicant"><h6>Applicant</h6></li>
				<li id="nav-property"><h6>Property</h6></li>
				<li id="nav-fuel-info"><h6>Fuel Info</h6></li>
				<li id="nav-form-signature"><h6>Submit</h6></li>
			</ol>
		</div>
		<form id="sign-up-form" action="<?php bloginfo("template_directory"); ?>/application-submit.php" method="POST">
			<div class="form-group Active has-warning" id="applicant">
				<h5>Applicant</h5>
				<div class="form-row" id="applicant-info">
					<div class="col-lg-4">
						<label class="sr-only" for="applicantFirstName">First Name *</label>
						<input type="text" class="form-control" name="applicantFirstName" id="applicantFirstName" placeholder="First name *">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="applicantLastName">Last Name *</label>
						<input type="text" class="form-control" name="applicantLastName" id="applicantLastName" placeholder="Last name *">
						<input type="text" id="applicantFullName" style="display: none;">
					</div>
					<div class="col-lg-4">
						<label class="date" for="applicantDOB">Date of Birth *</label>
						<input type="date" class="form-control" name="applicantDOB" id="applicantDOB" placeholder="Date of Birth *">
					</div>
					<div class="col-12">
						<label class="sr-only" for="applicantStreetAddress">Street Address *</label>
						<input type="text" class="form-control" name="applicantStreetAddress" id="applicantStreetAddress" placeholder="Street Address *">
					</div>
					<div class="col-12">
						<label class="sr-only" for="applicantStreetAddress2">Address 2 (Apartment, studio, floor)</label>
						<input type="text" class="form-control" name="applicantStreetAddress2" id="applicantStreetAddress2" placeholder="Address 2 (Apartment, studio, floor)">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="applicantCity">City *</label>
						<input type="text" class="form-control" name="applicantCity" id="applicantCity" placeholder="City *">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="applicantState">State *</label>
						<select class="form-control" name="applicantState" id="applicantState">
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
						<label class="sr-only" for="applicantZip">Zip *</label>
						<input type="text" class="form-control" name="applicantZip" id="applicantZip" placeholder="Zip">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="applicantTelephone">Primary Telephone *</label>
						<input type="tel" class="form-control" name="applicantTelephone" id="applicantTelephone" placeholder="Primary telephone">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="applicantTelephone2">Secondary Telephone</label>
						<input type="tel" class="form-control" name="applicantTelephone2" id="applicantTelephone2" placeholder="Secondary telephone">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="applicantEmail">Email Address</label>
						<input type="email" class="form-control" name="applicantEmail" id="applicantEmail" placeholder="Email Address">
					</div>
					<div class="col-12">
						<p style="font-size: 12px"><?php echo $email_disclaimer; ?></p>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="applicantLicense">Driver's License Number</label>
						<input type="text" class="form-control" name="applicantLicense" id="applicantLicense" placeholder="Driver's License #">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="applicantSocial">Social Security Number *</label>
						<input type="text" class="form-control" name="applicantSocial" id="applicantSocial" placeholder="Social Security #">
					</div>
					<div class="col-lg-12">
						<label class="sr-only" for="accountType">Type of account requested</label>
						<select class="form-control" name="accountType" id="accountType">
							<option value="">Type of account requested *</option>
							<option value="C.O.D">C.O.D</option>
							<option value="Net 14 Day">Net 14 Day</option>
							<option value="Downside Protection">Downside Protection</option>
							<option value="Floating Budget">Floating Budget</option>
							<option value="Fixed Price Budget">Fixed Price Budget (lock-in program)</option>
							<option value="Pre-Paid Plan">Pre-Paid (lock-in program)</option>
						</select>
					</div>
					<div class="col-lg-12">
						<p style="font-size: 12px">* Lock in programs are good from June - April. Visit our <a class="c-g" style="font-weight: 700" href="<?php echo get_site_url(); ?>/price-plans" target="_blank">price plans</a> page for more information.</p>
					</div>
				</div>
				<h5>Co-applicant</h5>
				<div class="form-row">
					<div class="col-12">
						<div class="not-applicable d-flex" data-applicable="true">
							<div class="checkbox"><span>x</span></div>
							<p>Not applicable.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="coApplicantFirstName">Co Applicant First Name</label>
						<input type="text" class="coApplicant form-control" name="coApplicantFirstName" id="coApplicantFirstName" placeholder="First name">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="coApplicantLastName">Co Applicant Last Name</label>
						<input type="text" class="coApplicant form-control" name="coApplicantLastName" id="coApplicantLastName" placeholder="Last name">
						<input type="text" id="coApplicantFullName" style="display: none;">
					</div>
					<div class="col-lg-4">
						<label class="date" for="coApplicantDOB">Date of Birth</label>
						<input type="date" class="coApplicant form-control" name="coApplicantDOB" id="coApplicantDOB">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="coApplicantLicense">Co Applicant Driver's License Number</label>
						<input type="text" class="coApplicant form-control" name="coApplicantLicense" id="coApplicantLicense" placeholder="Driver's License #">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="coApplicantSocial">Co Applicant Social Security Number</label>
						<input type="text" class="coApplicant form-control" name="coApplicantSocial" id="coApplicantSocial" placeholder="Social Security #">
					</div>
				</div>
				<h5>Current Employer</h5>
				<div class="form-row">
					<div class="col-lg-6">
						<label class="sr-only" for="employerName">Name</label>
						<input type="text" class="form-control" name="employerName" id="employerName" placeholder="Current Employer">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="employerTelephone">Telephone</label>
						<input type="telephone" class="form-control" name="employerTelephone" placeholder="Telephone">
					</div>
					<div class="col-12">
						<label class="sr-only" for="employerStreetAddress">Address</label>
						<input type="text" class="form-control" name="employerStreetAddress" id="employerStreetAddress" placeholder="Street Address (123 Water St.)">
					</div>
					<div class="col-12">
						<label class="sr-only" for="employerStreetAddress2">Address 2 (Apartment, Studio, Floor)</label>
						<input type="text" class="form-control" name="employerStreetAddress2" id="employerStreetAddress2" placeholder="Address 2 (Apartment, studio, floor)">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="employerCity">City</label>
						<input type="text" class="form-control" name="employerCity" id="employerCity" placeholder="City">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="employerState">State</label>
						<select class="form-control" name="employerState" id="employerState">
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
						<label class="sr-only" for="employerZip">Zip</label>
						<input type="text" class="form-control" name="employerZip" id="employerZip" placeholder="Zip">
					</div>
					<div class="col-lg-4">
						<label class="date" for="employerStart">Employed Since</label>
						<input type="date" class="form-control" name="employerStart" id="employerStart">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="annualIncome">Annual Income</label>
						<input type="number" class="form-control" name="annualIncome" id="annualIncome" placeholder="Annual Income">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="otherIncome">Other Income</label>
						<input type="number" class="form-control" name="otherIncome" id="otherIncome" placeholder="Other Income">
					</div>
				</div>
				<div class="d-flex buttons mt-5">
					<div class="back"><p>Back</p></div>
					<div class="next"><p>Next</p></div>
				</div>
			</div>
			<div class="form-group" id="property">
				<h5>Property</h5>
				<div class="form-row">
					<div class="col-12" data-subsection="property">
						<div class="same-as-applicant d-flex" data-sameas="true">
							<div class="checkbox"><span>x</span></div>
							<p>Same as applicant address.</p>
						</div>
					</div>
					<div class="col-12">
						<label class="sr-only" for="propertyStreetAddress">Address *</label>
						<input type="text" class="form-control" name="propertyStreetAddress" id="propertyStreetAddress" placeholder="Street Address *">
					</div>
					<div class="col-12">
						<label class="sr-only" for="propertyStreetAddress2">Address 2 (Apartment, Studio, Floor)</label>
						<input type="text" class="form-control" name="propertyStreetAddress2" id="propertyStreetAddress2" placeholder="Address 2 (Apartment, studio, floor)">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="propertyCity">City *</label>
						<input type="text" class="form-control" name="propertyCity" id="propertyCity" placeholder="City *">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="propertyState">State *</label>
						<select class="form-control" name="propertyState" id="propertyState">
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
						<label class="sr-only" for="propertyZip">Zip *</label>
						<input type="text" class="form-control" name="propertyZip" id="propertyZip" placeholder="Zip *">
					</div>
					<div class="col-12">
						<label class="sr-only" for="propertyDetails">Additional Property Details and Directions</label>
						<textarea class="form-control" rows="4" name="propertyDetails" id="propertyDetails" placeholder="Detailed/additional directions to your location."></textarea>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="propertyType">Property Type *</label>
						<select class="form-control" name="propertyType" id="propertyType">
							<option value="n/a">Property Type *</option>
							<option value="Single Family">Single Family</option>
							<option value="Apartment">Apartment</option>
							<option value="Mobile Home">Mobile Home</option>
							<option value="Multifamily Complex">Multifamily Complex</option>
							<option value="Townhome">Townhome</option>
							<option value="Duplex">Duplex</option>
							<option value="Commercial">Commercial</option>
							<option value="Garage">Garage</option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="fuelType">Fuel Type to Deliver *</label>
						<select class="form-control" name="fuelType" id="fuelType">
							<option value="">Fuel Type to Deliver *</option>
							<option value="#2 Oil">#2 Oil</option>
							<option value="Kerosene">Kerosene</option>
							<option value="Clear On-Road Diesel">Clear On-Road Diesel</option>
							<option value="Dyed Off-Road Diesel">Dyed Off-Road Diesel</option>
							<option value="Propane">Propane</option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="propertyOccupied">Does anyone live here?</label>
						<select class="form-control" name="propertyOccupied" id="propertyOccupied">
							<option value="n/a">Does anyone live here? *</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="automaticDeliveries">Schedule automatic deliveries? *</label>
						<select class="form-control" name="automaticDeliveries" id="automaticDeliveries">
							<option value="n/a">Schedule automatic deliveries? *</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-12">
						<p style="font-size: 12px">*Automatic deliveries: If yes, then only with approved credit. Please contact the office should you add, remove, or stop using a second source of heat (wood, propane, heat pumps, etc). You will be at risk of running out oil/propane if the office is not notified in a timely manner of this change.</p>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="woodHeating">Is wood heating used? *</label>
						<select class="form-control" name="woodHeating" id="woodHeating">
							<option value="n/a">Is wood heating used? *</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="propertySeasonal">Is this a seasonal property *?</label>
						<select class="form-control" name="propertySeasonal" id="propertySeasonal">
							<option value="n/a">Is this a seasonal property? *</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="deliveryMethod">Best way to deliver *</label>
						<select class="form-control" name="deliveryMethod" id="deliveryMethod">
							<option value="n/a">Best way to deliver *</option>
							<option value="Turn around in drive way">Turn around in drive way</option>
							<option value="Back in">Back in drive way</option>
							<option value="Park on street">Park on street</option>
						</select>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="propertyCaretaker">Does this property have a caretaker? *</label>
						<select class="form-control" name="propertyCaretaker" id="propertyCaretaker">
							<option value="n/a">Does this property have a caretaker? *</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<h5>Caretaker</h5>
				<div class="form-row">
					<div class="col-lg-4 caretaker-info">
						<label class="sr-only" for="caretakerFirstName">First Name</label>
						<input type="text" class="form-control" name="caretakerFirstName" id="caretakerFirstName" placeholder="First name">
					</div>
					<div class="col-lg-4 caretaker-info">
						<label class="sr-only" for="caretakerLastName">Last Name</label>
						<input type="text" class="form-control" name="caretakerLastName" id="caretakerLastName" placeholder="Last name">
					</div>
					<div class="col-lg-4 caretaker-info">
						<label class="sr-only" for="caretakerTelephone">Telephone</label>
						<input type="tel" class="form-control" name="caretakerTelephone" id="caretakerTelephone" placeholder="Telephone">
					</div>
				</div>
				<h5>Landlord or Mortgage Holder</h5>
				<div class="form-row">
					<div class="col-12" data-subsection="landlord">
						<div class="same-as-applicant d-flex" data-sameas="true">
							<div class="checkbox"><span>x</span></div>
							<p>Same as applicant.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="landlordFirstName">First Name</label>
						<input type="text" class="form-control" name="landlordFirstName" id="landlordFirstName" placeholder="First Name">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="landlordLastName">Last Name</label>
						<input type="text" class="form-control" name="landlordLastName" id="landlordLastName" placeholder="Last Name">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="landlordTelephone">Primary Telephone</label>
						<input type="telephone" class="form-control" name="landlordTelephone" id="landlordTelephone" placeholder="Primary Telephone">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="landlordTelephone2">Secondary Telephone</label>
						<input type="telephone" class="form-control" name="landlordTelephone2" id="landlordTelephone2" placeholder="Secondary Telephone">
					</div>
					<div class="col-12">
						<label class="sr-only" for="landlordStreetAddress">Address</label>
						<input type="text" class="form-control" name="landlordStreetAddress" id="landlordStreetAddress" placeholder="Street Address (123 Water St.)">
					</div>
					<div class="col-12">
						<label class="sr-only" for="landlordStreetAddress2">Address 2 (Apartment, Studio, Floor)</label>
						<input type="text" class="form-control" name="landlordStreetAddress2" id="landlordStreetAddress2" placeholder="Address 2 (Apartment, studio, floor)">
					</div>
					<div class="col-lg-6">
						<label class="sr-only" for="landlordCity">City</label>
						<input type="text" class="form-control" name="landlordCity" id="landlordCity" placeholder="City">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="landlordState">State</label>
						<select class="form-control" name="landlordState" id="landlordState">
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
						<label class="sr-only" for="landlordZip">Zip</label>
						<input type="text" class="form-control" name="landlordZip" id="landlordZip" placeholder="Zip">
					</div>
				</div>
				<div class="d-flex buttons mt-5">
					<div class="back"><p>Back</p></div>
					<div class="next"><p>Next</p></div>
				</div>
			</div>
			<div class="form-group" id="fuel-info">
				<h5>Home Heating Oil</h5>
				<div class="form-row">
					<div class="col-12">
						<div class="not-applicable d-flex" data-applicable="true">
							<div class="checkbox"><span>x</span></div>
							<p>Not applicable.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilNewTank">New tank?</label>
						<select class="form-control" name="oilNewTank" id="oilNewTank">
							<option value="n/a">New tank?</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilPipeVented">Pipe vented?</label>
						<select class="form-control" name="oilPipeVented" id="oilPipeVented">
							<option value="n/a">Pipe vented?</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilMonitor">Monitor?</label>
						<select class="form-control" name="oilMonitor" id="oilMonitor">
							<option value="n/a">Monitor?</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilTankSize">Tank Size</label>
						<input class="form-control" type="number" name="oilTankSize" id="oilTankSize" placeholder="Tank Size (gal)">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilTankQuantity"># of tanks?</label>
						<input class="form-control" type="number" name="oilTankQuantity" id="oilTankQuantity" placeholder="# of tanks">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilTankFillLevel">Current fill level</label>
						<input class="form-control" type="number" name="oilTankFillLevel" id="oilTankFillLevel" placeholder="Current fill level">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilTankLocation">Tank Location</label>
						<select class="form-control" name="oilTankLocation" id="oilTankLocation">
							<option value="n/a">Tank Location</option>
							<option value="Inside">Inside</option>
							<option value="Outside">Outside</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilFillLocation">Fill Location (looking at front of building)</label>
						<select class="form-control" name="oilFillLocation" id="oilFillLocation">
							<option value="n/a">Fill Location (From front of building)</option>
							<option value="Front">Front</option>
							<option value="Back">Back</option>
							<option value="Left Side">Left Side</option>
							<option value="Right Side">Right Side</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilHotWater">Furnace heat your hot water?</label>
						<select class="form-control" name="oilHotWater" id="oilHotWater">
							<option value="n/a">Does your furnace heat your hot water?</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilNeedDelivery">Need Delivery?</label>
						<select class="form-control" name="oilNeedDelivery" id="oilNeedDelivery">
							<option value="n/a">Need Delivery?</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="oilTankFillLevelRequested">How much oil do you need?</label>
						<input class="form-control" type="number" name="oilTankFillLevelRequested" id="oilTankFillLevelRequested" placeholder="How oil much do you need?">
					</div>
				</div>
				<h5>Propane</h5>
				<div class="form-row">
					<div class="col-12">
						<div class="not-applicable d-flex" data-applicable="true">
							<div class="checkbox"><span>x</span></div>
							<p>Not applicable.</p>
						</div>
					</div>
					<div class="col-12">
						<p>Please select all the appliances in your home that use propane:</p>
						<input class="form-check-input" id="propaneAppliancesRange" name="propaneAppliancesRange" type="checkbox" value="Yes">
							
						<label class="mx-4" for="propaneAppliancesRange">Range</label>
						<input class="form-check-input" id="propaneAppliancesFurnace" name="propaneAppliancesFurnace" type="checkbox" value="Yes">
							
						<label class="mx-4" for="propaneAppliancesFurnace">Furnace</label>
						<input class="form-check-input" id="propaneAppliancesBoiler" name="propaneAppliancesBoiler" type="checkbox" value="Yes">
							
						<label class="mx-4" for="propaneAppliancesBoiler">Boiler</label>
						<input class="form-check-input" id="propaneAppliancesWaterheater" name="propaneAppliancesWaterheater" type="checkbox" value="Yes">
							
						<label class="mx-4" for="propaneAppliancesWaterheater">Water Heater</label>
						<input class="form-check-input" id="propaneAppliancesSpaceheater" name="propaneAppliancesSpaceheater" type="checkbox" value="Yes">
							
						<label class="mx-4" for="propaneAppliancesSpaceheater">Space Heater</label>
						<input class="form-check-input" id="propaneAppliancesDryer" name="propaneAppliancesDryer" type="checkbox" value="Yes">
							
						<label class="mx-4" for="propaneAppliancesDryer">Dryer</label>
						<input class="form-check-input" id="propaneAppliancesFireplace" name="propaneAppliancesFireplace" type="checkbox" value="Yes">
							
						<label class="mx-4" for="propaneAppliancesFireplace">Fire Place</label>
					</div>
					<div class="col-lg-12">
						<label class="sr-only" for="propaneAppliancesAdditional">Additional appliances</label>
						<input class="form-control" type="text" name="propaneAppliancesAdditional" id="propaneAppliancesAdditional" placeholder="Additional appliances">
					</div>
				</div>
				<h5>New Propane Installation</h5>
				<div class="form-row">
					<div class="col-12">
						<div class="not-applicable d-flex" data-applicable="true">
							<div class="checkbox"><span>x</span></div>
							<p>Not applicable.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="newPropaneLinesOut">Do all the lines inside the home run to the outside?</label>
						<select class="form-control" name="newPropaneLinesOut" id="newPropaneLinesOut">
							<option value="n/a">Are all the lines inside the home run to the outside?</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="newPropaneWhoLines">Who ran the lines?</label>
						<input type="text" class="form-control" name="newPropaneWhoLines" id="newPropaneWhoLines" placeholder="Who ran the lines?">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="newPropaneWhoLinesTelephone">Phone Number</label>
						<input type="text" class="form-control" name="newPropaneWhoLinesTelephone" id="newPropaneWhoLinesTelephone" placeholder="Phone Number">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="newPropaneTankSize">Tank size needed</label>
						<input type="number" class="form-control" name="newPropaneTankSize" id="newPropaneTankSize" placeholder="Tank size needed">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="newPropaneTankQuantity">How many?</label>
						<input type="number" class="form-control" name="newPropaneTankQuantity" id="newPropaneTankQuantity" placeholder="How many?">
					</div>
					<div class="col-lg-4">
						<label class="sr-only" for="newPropaneUse">Anticipated fuel usage (gal)</label>
						<input type="number" class="form-control" name="newPropaneUse" id="newPropaneUse" placeholder="Anticipated fuel usage (gal)">
					</div>
				</div>
				<h5>Tank Change Out</h5>
				<div class="form-row">
					<div class="col-12">
						<div class="not-applicable d-flex" data-applicable="true">
							<div class="checkbox"><span>x</span></div>
							<p>Not applicable.</p>
						</div>
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="tankChangeCurrentTank">Current tank size</label>
						<input type="number" class="form-control" name="tankChangeCurrentTank" id="tankChangeCurrentTank" placeholder="Current tank size">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="tankChangeCurrentQuantity">How many tanks currently?</label>
						<input type="number" class="form-control" name="tankChangeCurrentQuantity" id="tankChangeCurrentQuantity" placeholder="How many tanks currently?">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="tankChangeCurrentFillLevel">Current fill level</label>
						<input type="number" class="form-control" name="tankChangeCurrentFillLevel" id="tankChangeCurrentFillLevel" placeholder="Current fill level">
					</div>
					<div class="col-lg-3">
						<label class="sr-only" for="tankChangeUse">Anticipated fuel usage (gal)</label>
						<input type="number" class="form-control" name="tankChangeUse" id="tankChangeUse" placeholder="Anticipated fuel usage (gal)">
					</div>
				</div>
				<h5>Additional Info</h5>
				<div class="form-row">
					<label class="sr-only" for="additionalInfoGeneral">Any additional information you feel may assist us in determining your eligibility for credit with No Frills Oil Company</label>
					<textarea class="form-control" name="additionalInfoGeneral" id="additionalInfoGeneral" placeholder="Any additional information you feel may assist us in determining your eligibility for credit with No Frills Oil Company"></textarea>
				</div>
				<div class="d-flex buttons mt-5">
					<div class="back"><p>Back</p></div>
					<div class="next"><p>Next</p></div>
				</div>
			</div>
			<div class="form-group" id="form-signature">
				<h5>Authorization</h5>
				<div class="terms-conditions"><?php echo $terms_conditions ?></div>
				<div class="form-row">
					<div class="col-lg-12">
						<label class="sr-only" for="applicantNameSignature">Applicant Full Name</label>
						<input type="text" class="form-control" name="applicantNameSignature" id="applicantNameSignature" placeholder="Applicant Full Name">
						<input class="form-check-input" id="applicantSignatureAuthorization" name="applicantSignatureAuthorization" type="checkbox" value="'Applicant DOES AGREE to terms and conditions.'">
						<label for="applicantSignatureAuthorization" class="mx-4">I acknowledge that I have read and understand the disclosures.</label>
					</div>
					<div class="col-lg-12">
						<label class="sr-only" for="coApplicantNameSignature">Co-applicant Full Name</label>
						<input type="text" class="form-control" name="coApplicantNameSignature" id="coApplicantNameSignature" placeholder="Co-applicant Full Name">
						<input class="form-check-input" id="coApplicantSignatureAuthorization" name="coApplicantSignatureAuthorization" type="checkbox" value="'Co-applicant DOES AGREE to terms and conditions.'">
						<label for="coApplicantSignatureAuthorization" class="mx-4">I acknowledge that I have read and understand the disclosures.</label>
					</div>
				</div>
				<div class="d-flex buttons mt-5">
					<div class="back"><p>Back</p></div>
					<div class="next"><p>Next</p></div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>

<?php get_footer(); ?>