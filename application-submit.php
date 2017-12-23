<?php 
header("Location: nofrills/application-submit");
// Connection to db
	$host = "localhost";
	$user = "alex";
	$pass = "Spartan12#";
	$db = "nofrills";
	$charset = "utf8";

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	$opt = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	];

	$pdo = new PDO($dsn, $user, $pass, $opt);

// Set form variables
	$formVariables = array(
	    "applicantFirstName" => htmlspecialchars($_POST["applicantFirstName"]),
	    "applicantLastName" => htmlspecialchars($_POST["applicantLastName"]),
		"applicantDOB" => htmlspecialchars($_POST["applicantDOB"]),
		"applicantStreetAddress" => htmlspecialchars($_POST["applicantStreetAddress"]),
		"applicantStreetAddress2" => htmlspecialchars($_POST["applicantStreetAddress2"]),
		"applicantCity" => htmlspecialchars($_POST["applicantCity"]),
		"applicantState" => htmlspecialchars($_POST["applicantState"]),
		"applicantZip" => htmlspecialchars($_POST["applicantZip"]),
		"applicantTelephone" => htmlspecialchars($_POST["applicantTelephone"]),
		"applicantTelephone2" => htmlspecialchars($_POST["applicantTelephone2"]),
		"applicantEmail" => htmlspecialchars($_POST["applicantEmail"]),
		"applicantLicense" => htmlspecialchars($_POST["applicantLicense"]),
		"applicantSocial" => htmlspecialchars($_POST["applicantSocial"]),
		"accountType" => htmlspecialchars($_POST["accountType"]),
		"coApplicantFirstName" => htmlspecialchars($_POST["coApplicantFirstName"]),
		"coApplicantLastName" => htmlspecialchars($_POST["coApplicantLastName"]),
		"coApplicantDOB" => htmlspecialchars($_POST["coApplicantDOB"]),
		"coApplicantLicense" => htmlspecialchars($_POST["coApplicantLicense"]),
		"coApplicantSocial" => htmlspecialchars($_POST["coApplicantSocial"]),
		"employerName" => htmlspecialchars($_POST["employerName"]),
		"employerTelephone" => htmlspecialchars($_POST["employerTelephone"]),
		"employerStreetAddress" => htmlspecialchars($_POST["employerStreetAddress"]),
		"employerStreetAddress2" => htmlspecialchars($_POST["employerStreetAddress2"]),
		"employerCity" => htmlspecialchars($_POST["employerCity"]),
		"employerState" => htmlspecialchars($_POST["employerState"]),
		"employerZip" => htmlspecialchars($_POST["employerZip"]),
		"employerStart" => htmlspecialchars($_POST["employerStart"]),
		"annualIncome" => htmlspecialchars($_POST["annualIncome"]),
		"otherIncome" => htmlspecialchars($_POST["otherIncome"]),
		"landlordFirstName" => htmlspecialchars($_POST["landlordFirstName"]),
		"landlordLastName" => htmlspecialchars($_POST["landlordLastName"]),
		"landlordTelephone" => htmlspecialchars($_POST["landlordTelephone"]),
		"landlordTelephone2" => htmlspecialchars($_POST["landlordTelephone2"]),
		"landlordStreetAddress" => htmlspecialchars($_POST["landlordStreetAddress"]),
		"landlordStreetAddress2" => htmlspecialchars($_POST["landlordStreetAddress2"]),
		"landlordCity" => htmlspecialchars($_POST["landlordCity"]),
		"landlordState" => htmlspecialchars($_POST["landlordState"]),
		"landlordZip" => htmlspecialchars($_POST["landlordZip"]),
		"propertyStreetAddress" => htmlspecialchars($_POST["propertyStreetAddress"]),
		"propertyStreetAddress2" => htmlspecialchars($_POST["propertyStreetAddress2"]),
		"propertyCity" => htmlspecialchars($_POST["propertyCity"]),
		"propertyState" => htmlspecialchars($_POST["propertyState"]),
		"propertyZip" => htmlspecialchars($_POST["propertyZip"]),
		"propertyDetails" => htmlspecialchars($_POST["propertyDetails"]),
		"propertyType" => htmlspecialchars($_POST["propertyType"]),
		"fuelType" => htmlspecialchars($_POST["fuelType"]),
		"propertyOccupied" => htmlspecialchars($_POST["propertyOccupied"]),
		"automaticDeliveries" => htmlspecialchars($_POST["automaticDeliveries"]),
		"woodHeating" => htmlspecialchars($_POST["woodHeating"]),
		"propertySeasonal" => htmlspecialchars($_POST["propertySeasonal"]),
		"deliveryMethod" => htmlspecialchars($_POST["deliveryMethod"]),
		"propertyCaretaker" => htmlspecialchars($_POST["propertyCaretaker"]),
		"caretakerFirstName" => htmlspecialchars($_POST["caretakerFirstName"]),
		"caretakerLastName" => htmlspecialchars($_POST["caretakerLastName"]),
		"caretakerTelephone" => htmlspecialchars($_POST["caretakerTelephone"]),
		"oilNewTank" => htmlspecialchars($_POST["oilNewTank"]),
		"oilPipeVented" => htmlspecialchars($_POST["oilPipeVented"]),
		"oilMonitor" => htmlspecialchars($_POST["oilMonitor"]),
		"oilTankSize" => htmlspecialchars($_POST["oilTankSize"]),
		"oilTankQuantity" => htmlspecialchars($_POST["oilTankQuantity"]),
		"oilTankFillLevel" => htmlspecialchars($_POST["oilTankFillLevel"]),
		"oilTankLocation" => htmlspecialchars($_POST["oilTankLocation"]),
		"oilFillLocation" => htmlspecialchars($_POST["oilFillLocation"]),
		"oilHotWater" => htmlspecialchars($_POST["oilHotWater"]),
		"oilNeedDelivery" => htmlspecialchars($_POST["oilNeedDelivery"]),
		"oilTankFillLevelRequested" => htmlspecialchars($_POST["oilTankFillLevelRequested"]),
		"propaneAppliancesRange" => (isset($_POST["propaneAppliancesRange"])) ? $_POST["propaneAppliancesRange"] : "No",
		"propaneAppliancesFurnace" => (isset($_POST["propaneAppliancesFurnace"])) ? $_POST["propaneAppliancesFurnace"] : "No",
		"propaneAppliancesBoiler" => (isset($_POST["propaneAppliancesBoiler"])) ? $_POST["propaneAppliancesBoiler"] : "No" ,
		"propaneAppliancesWaterheater" => (isset($_POST["propaneAppliancesWaterheater"])) ? $_POST["propaneAppliancesWaterheater"] : "No",
		"propaneAppliancesSpaceheater" => (isset($_POST["propaneAppliancesSpaceheater"])) ? $_POST["propaneAppliancesSpaceheater"] : "No",
		"propaneAppliancesDryer" => (isset($_POST["propaneAppliancesDryer"])) ? $_POST["propaneAppliancesDryer"] : "No",
		"propaneAppliancesFireplace" => (isset($_POST["propaneAppliancesFireplace"])) ? $_POST["propaneAppliancesFireplace"] : "No",
		"propaneAppliancesAdditional" => htmlspecialchars($_POST["propaneAppliancesAdditional"]),
		"newPropaneLinesOut" => htmlspecialchars($_POST["newPropaneLinesOut"]),
		"newPropaneWhoLines" => htmlspecialchars($_POST["newPropaneWhoLines"]),
		"newPropaneWhoLinesTelephone" => htmlspecialchars($_POST["newPropaneWhoLinesTelephone"]),
		"newPropaneTankSize" => htmlspecialchars($_POST["newPropaneTankSize"]),
		"newPropaneTankQuantity" => htmlspecialchars($_POST["newPropaneTankQuantity"]),
		"newPropaneUse" => htmlspecialchars($_POST["newPropaneUse"]),
		"tankChangeCurrentTank" => htmlspecialchars($_POST["tankChangeCurrentTank"]),
		"tankChangeCurrentQuantity" => htmlspecialchars($_POST["tankChangeCurrentQuantity"]),
		"tankChangeCurrentFillLevel" => htmlspecialchars($_POST["tankChangeCurrentFillLevel"]),
		"tankChangeUse" => htmlspecialchars($_POST["tankChangeUse"]),
		"additionalInfoGeneral" => htmlspecialchars($_POST["additionalInfoGeneral"]),
		"applicantNameSignature" => htmlspecialchars($_POST["applicantNameSignature"]),
		"applicantSignatureAuthorization" => (isset($_POST["applicantSignatureAuthorization"])) ? $_POST["applicantSignatureAuthorization"] : "Applicant DOES NOT AGREE to terms and conditions.",
		"coApplicantNameSignature" => htmlspecialchars($_POST["coApplicantNameSignature"]),
		"coApplicantSignatureAuthorization" => (isset($_POST["coApplicantSignatureAuthorization"])) ? $_POST["coApplicantSignatureAuthorization"] : "Co-applicant DOES NOT AGREE to the terms and conditions."
		);

// Create prepared statement
	$fields = array();
	$questionMarks = array();
	$sParam = array();
	$values = array();
	// Parse form variables
	foreach ($formVariables as $field  => $vals) {
		$fields[] = $field;
		$questionMarks[] = "?";

		if ($vals == "") {
			$vals = "n/a";
		}
		$values[] = $vals;
	}
	// List fields and placeholders
	$fieldString = implode(",", $fields);
	$questionMarkString = implode(",", $questionMarks);
	// Prepare statement
	$stmt = $pdo->prepare("INSERT INTO wp_nfas_fields (" . $fieldString . ") VALUES (" . $questionMarkString . ")");
	// Execute statement
	if (!$stmt) {
		die("Statement is false.");
	} else {
		$stmt->execute($values);
	}
	// Close the connection
	$stmt=null;
	$pdo=null;
?>