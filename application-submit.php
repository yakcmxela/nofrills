<?php 
header("Location: http://nofrillsoil.com/application-submit");
// WP functions
	require_once('../../../wp-load.php');
// Defuse
	require_once('/var/www/lib/defuse-crypto.phar');
	use Defuse\Crypto\Crypto;
	use Defuse\Crypto\Key;
// Connection to db
	require('/etc/lib/db.php');

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	$opt = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	];

	$pdo = new PDO($dsn, $user, $pass, $opt);

// Set form variables
	
	$applicantFirstName = $_POST["applicantFirstName"];
	$applicantLastName = $_POST["applicantLastName"];
	$applicantTelephone = $_POST["applicantTelephone"];
	$applicantTelephone2 = $_POST["applicantTelephone2"];
	$applicantEmail = $_POST["applicantEmail"];
	$applicantStreet = $_POST["applicantStreetAddress"];
	$applicantSSN = $_POST["applicantSocial"];
	$applicantLicense = $_POST["applicantLicense"];

	$coApplicantFirstName = $_POST["coApplicantFirstName"];
	$coApplicantLastName = $_POST["coApplicantLastName"];
	$coApplicantPhone = $_POST["coApplicantPhone"];
	$coApplicantSSN = $_POST["coApplicantSocial"];
	$coApplicantLicense = $_POST["coApplicantLicense"];

	$employerName = $_POST["employerName"];
	$employerTelephone = $_POST["employerTelephone"];
	$employerStreet = $_POST["employerStreetAddress"];

	$propertyStreet = $_POST["propertyStreetAddress"];

	$caretakerFirstName = $_POST["caretakerFirstName"];
	$caretakerLastName = $_POST["caretakerLastName"];
	$caretakerTelephone = $_POST["caretakerTelephone"];

	$landlordFirstName = $_POST["landlordFirstName"];
	$landlordLastName = $_POST["landlordLastName"];
	$landlordTelephone = $_POST["landlordTelephone"];
	$landlordTelephone2 = $_POST["landlordTelephone2"];
	$landlordStreet = $_POST["landlordStreetAddress"];

	$applicantNameSignature = $_POST["applicantNameSignature"];
	$coApplicantNameSignature = $_POST["coApplicantNameSignature"];

	function loadEncryptionKey() {
		$keyAscii = file_get_contents('/etc/lib/llave.txt');
		return Key::loadFromAsciiSafeString($keyAscii);
	}

	$key = loadEncryptionKey();

	$encryptedAppFirstName = Crypto::encrypt($applicantFirstName, $key, false);	
	$encryptedAppLastName = Crypto::encrypt($applicantLastName, $key, false);	
	$encryptedAppTelephone = Crypto::encrypt($applicantTelephone, $key, false);	
	$encryptedAppTelephone2 = Crypto::encrypt($applicantTelephone2, $key, false);	
	$encryptedAppEmail = Crypto::encrypt($applicantEmail, $key, false);	
	$encryptedAppStreet = Crypto::encrypt($applicantStreet, $key, false);	
	$encryptedAppSSN = Crypto::encrypt($applicantSSN, $key, false);	
	$encryptedAppLicense = Crypto::encrypt($applicantLicense, $key, false);

	$encryptedCoAppFirstName = Crypto::encrypt($coApplicantFirstName, $key, false);
	$encryptedCoAppLastName = Crypto::encrypt($coApplicantLastName, $key, false);
	$encryptedCoAppPhone = Crypto::encrypt($coApplicantPhone, $key, false);
	$encrypedCoAppSSN = Crypto::encrypt($coApplicantSSN, $key, false);
	$encryptedCoAppLicense = Crypto::encrypt($coApplicantLicense, $key, false);

	$encryptedEmployerName = Crypto::encrypt($employerName, $key, false);
	$encryptedEmployerTelephone = Crypto::encrypt($employerTelephone, $key, false);
	$encryptedEmployerStreet = Crypto::encrypt($employerStreet, $key, false);

	$encryptedPropertyStreet = Crypto::encrypt($propertyStreet, $key, false);

	$encryptedCaretakerFirstName = Crypto::encrypt($caretakerFirstName, $key, false);
	$encryptedCaretakerLastName = Crypto::encrypt($caretakerLastName, $key, false);
	$encryptedCaretakerTelephone = Crypto::encrypt($caretakerTelephone, $key, false);

	$encryptedLandlordFirstName = Crypto::encrypt($landlordFirstName, $key, false);
	$encryptedLandlordLastName = Crypto::encrypt($landlordLastName, $key, false);
	$encryptedLandlordTelephone = Crypto::encrypt($landlordTelephone, $key, false);
	$encryptedLandlordTelephone2 = Crypto::encrypt($landlordTelephone2, $key, false);
	$encrypyedLandlordStreet = Crypto::encrypt($landlordStreet, $key, false);

	$encryptedAppNameSignature = Crypto::encrypt($applicantNameSignature, $key, false);
	$encryptedCoAppNameSignature = Crypto::encrypt($coApplicantNameSignature, $key, false);


	$formVariables = array(
	    "applicantFirstName" => $encryptedAppFirstName,
	    "applicantLastName" => $encryptedAppLastName,
		"applicantDOB" => htmlspecialchars($_POST["applicantDOB"]),
		"applicantStreetAddress" => $encryptedAppStreet,
		"applicantStreetAddress2" => htmlspecialchars($_POST["applicantStreetAddress2"]),
		"applicantCity" => htmlspecialchars($_POST["applicantCity"]),
		"applicantState" => htmlspecialchars($_POST["applicantState"]),
		"applicantZip" => htmlspecialchars($_POST["applicantZip"]),
		"applicantTelephone" => $encryptedAppTelephone,
		"applicantTelephone2" => $encryptedAppTelephone2,
		"applicantEmail" => $encryptedAppEmail,
		"applicantLicense" => $encryptedAppLicense,
		"applicantSocial" => $encryptedAppSSN,
		"accountType" => htmlspecialchars($_POST["accountType"]),
		"coApplicantFirstName" => $encryptedCoAppFirstName,
		"coApplicantLastName" => $encryptedCoAppLastName,
		"coApplicantDOB" => htmlspecialchars($_POST["coApplicantDOB"]),
		"coApplicantPhone" => $encryptedCoAppPhone,
		"coApplicantLicense" => $encryptedCoAppLicense,
		"coApplicantSocial" => $encrypedCoAppSSN,
		"employerName" => $encryptedEmployerName,
		"employerTelephone" => $encryptedEmployerTelephone,
		"employerStreetAddress" => $encryptedEmployerStreet,
		"employerStreetAddress2" => htmlspecialchars($_POST["employerStreetAddress2"]),
		"employerCity" => htmlspecialchars($_POST["employerCity"]),
		"employerState" => htmlspecialchars($_POST["employerState"]),
		"employerZip" => htmlspecialchars($_POST["employerZip"]),
		"employerStart" => htmlspecialchars($_POST["employerStart"]),
		"annualIncome" => htmlspecialchars($_POST["annualIncome"]),
		"otherIncome" => htmlspecialchars($_POST["otherIncome"]),
		"landlordFirstName" => $encryptedLandlordFirstName,
		"landlordLastName" => $encryptedLandlordLastName,
		"landlordTelephone" => $encryptedLandlordTelephone,
		"landlordTelephone2" => $encryptedLandlordTelephone2,
		"landlordStreetAddress" => $encrypyedLandlordStreet,
		"landlordStreetAddress2" => htmlspecialchars($_POST["landlordStreetAddress2"]),
		"landlordCity" => htmlspecialchars($_POST["landlordCity"]),
		"landlordState" => htmlspecialchars($_POST["landlordState"]),
		"landlordZip" => htmlspecialchars($_POST["landlordZip"]),
		"propertyStreetAddress" => $encryptedPropertyStreet,
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
		"caretakerFirstName" => $encryptedCaretakerFirstName,
		"caretakerLastName" => $encryptedCaretakerLastName,
		"caretakerTelephone" => $encryptedCaretakerTelephone,
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
		"applicantNameSignature" => $encryptedAppNameSignature,
		"applicantSignatureAuthorization" => (isset($_POST["applicantSignatureAuthorization"])) ? $_POST["applicantSignatureAuthorization"] : "Applicant DOES NOT AGREE to terms and conditions.",
		"coApplicantNameSignature" => $encryptedCoAppNameSignature,
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
	// Prepare notification
	$title = 'New Application From: ' . $applicantFirstName . ' ' . $applicantLastName . '.';
	$message = 'You have received a new application from ' . $applicantFirstName . ' ' . $applicantLastName . '.  Please log in to view the full application at nofrillsoil.com/wp-admin';
	$customerTitle = 'We Received Your Application';
	$customerMessage = 'This message has been sent to notify you that your sign up form has been received. This is an automatic email message. Do not reply to this email. If you have questions or concerns, contact chart@nofrillsoil.com.';
	// Execute statement
	if (!$stmt) {
		die("Statement is false.");
	} else {
		$stmt->execute($values);
		// Send notification
		wp_mail('chart@nofrillsoil.com' , $title, $message);
		wp_mail($applicantEmail, $customerTitle, $customerMessage);
	}

	// Close the connection
	$stmt=null;
	$pdo=null;
?>