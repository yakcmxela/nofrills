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
	    "nameInstitution" => htmlspecialchars($_POST["nameInstitution"]),
	    "streetInstitution" => htmlspecialchars($_POST["streetInstitution"]),
	    "streetInstitution2" => htmlspecialchars($_POST["streetInstitution2"]),
	    "cityInstitution" => htmlspecialchars($_POST["cityInstitution"]),
	    "stateInstitution" => htmlspecialchars($_POST["stateInstitution"]),
	    "zipInstitution" => htmlspecialchars($_POST["zipInstitution"]),
		"accountNumber" => htmlspecialchars($_POST["accountNumber"]),
		"routingNumber" => htmlspecialchars($_POST["routingNumber"]),
		"withdrawAmount" => htmlspecialchars($_POST["withdrawAmount"]),
		"amount" => htmlspecialchars($_POST["amount"]),
		"streetAddress" => htmlspecialchars($_POST["streetAddress"]),
		"streetAddress2" => htmlspecialchars($_POST["streetAddress2"]),
		"city" => htmlspecialchars($_POST["city"]),
		"state" => htmlspecialchars($_POST["state"]),
		"zip" => htmlspecialchars($_POST["zip"]),
		"nameSignature" => htmlspecialchars($_POST["nameSignature"]),
		"signatureAuthorization" => (isset($_POST["signatureAuthorization"])) ? $_POST["signatureAuthorization"] : "User DOES NOT AGREE to terms and conditions.",		
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
	$stmt = $pdo->prepare("INSERT INTO wp_nfach_fields (" . $fieldString . ") VALUES (" . $questionMarkString . ")");
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