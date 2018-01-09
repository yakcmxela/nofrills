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

// Fetch Key
	function loadEncryptionKey() {
		$keyAscii = file_get_contents('/etc/lib/llave.txt');
		return Key::loadFromAsciiSafeString($keyAscii);
	}

	$key = loadEncryptionKey();

// Set form variables
	$formVariables = array(
	    "nameInstitution" => Crypto::encrypt(htmlspecialchars($_POST["nameInstitution"]), $key, false),
	    "streetInstitution" => Crypto::encrypt(htmlspecialchars($_POST["streetInstitution"]), $key, false),
	    "streetInstitution2" => Crypto::encrypt(htmlspecialchars($_POST["streetInstitution2"]), $key, false),
	    "cityInstitution" => Crypto::encrypt(htmlspecialchars($_POST["cityInstitution"]), $key, false),
	    "stateInstitution" => Crypto::encrypt(htmlspecialchars($_POST["stateInstitution"]), $key, false),
	    "zipInstitution" => Crypto::encrypt(htmlspecialchars($_POST["zipInstitution"]), $key, false),
		"accountNumber" => Crypto::encrypt(htmlspecialchars($_POST["accountNumber"]), $key, false),
		"routingNumber" => Crypto::encrypt(htmlspecialchars($_POST["routingNumber"]), $key, false),
		"withdrawAmount" => Crypto::encrypt(htmlspecialchars($_POST["withdrawAmount"]), $key, false),
		"amount" => Crypto::encrypt(htmlspecialchars($_POST["amount"]), $key, false),
		"streetAddress" => Crypto::encrypt(htmlspecialchars($_POST["streetAddress"]), $key, false),
		"streetAddress2" => Crypto::encrypt(htmlspecialchars($_POST["streetAddress2"]), $key, false),
		"city" => Crypto::encrypt(htmlspecialchars($_POST["city"]), $key, false),
		"state" => Crypto::encrypt(htmlspecialchars($_POST["state"]), $key, false),
		"zip" => Crypto::encrypt(htmlspecialchars($_POST["zip"]), $key, false),
		"nameSignature" => Crypto::encrypt(htmlspecialchars($_POST["nameSignature"]), $key, false),
		"signatureAuthorization" => (isset($_POST["signatureAuthorization"])) ? $_POST["signatureAuthorization"] : "Applicant DOES NOT AGREE to terms and conditions.",		
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
	// Prepare notification
	$title = 'New ACH Authorization From: ' . htmlspecialchars($_POST["nameSignature"]) . '.';
	$message = 'You have received a new ACH Authorization from ' . htmlspecialchars($_POST["nameSignature"]) . '.  Please log in to view the full application at nofrillsoil.com/wp-admin';
	print_r($message);
	print_r($title);
	// Execute statement
	if (!$stmt) {
		die("Statement is false.");
	} else {
		$stmt->execute($values);
		// Send notification
		wp_mail( 'alex@boldcoastcreative.com' , $title, $message);
	}
	// Close the connection
	$stmt=null;
	$pdo=null;
?>