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
	$customerEmail = htmlspecialchars($_POST["email"]);
	$formVariables = array(
	    "nameInstitution" => Crypto::encrypt($_POST["nameInstitution"], $key, false),
	    "streetInstitution" => Crypto::encrypt($_POST["streetInstitution"], $key, false),
	    "streetInstitution2" => Crypto::encrypt($_POST["streetInstitution2"], $key, false),
	    "cityInstitution" => Crypto::encrypt($_POST["cityInstitution"], $key, false),
	    "stateInstitution" => Crypto::encrypt($_POST["stateInstitution"], $key, false),
	    "zipInstitution" => Crypto::encrypt($_POST["zipInstitution"], $key, false),
		"accountNumber" => Crypto::encrypt($_POST["accountNumber"], $key, false),
		"routingNumber" => Crypto::encrypt($_POST["routingNumber"], $key, false),
		"withdrawAmount" => Crypto::encrypt($_POST["withdrawAmount"], $key, false),
		"amount" => Crypto::encrypt($_POST["amount"], $key, false),
		"email" => Crypto::encrypt($_POST["email"], $key, false),
		"streetAddress" => Crypto::encrypt($_POST["streetAddress"], $key, false),
		"streetAddress2" => Crypto::encrypt($_POST["streetAddress2"], $key, false),
		"city" => Crypto::encrypt($_POST["city"], $key, false),
		"state" => Crypto::encrypt($_POST["state"], $key, false),
		"zip" => Crypto::encrypt($_POST["zip"], $key, false),
		"nameSignature" => Crypto::encrypt($_POST["nameSignature"], $key, false),
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
	$customerTitle = 'We Received Your Application';
	$customerMessage = 'This message has been sent to notify you that your ACH Authorization form has been received. This is an automatic email message. Do not reply to this email. If you have questions or concerns, contact chart@nofrillsoil.com.';
	// Execute statement
	if (!$stmt) {
		die("Statement is false.");
	} else {
		$stmt->execute($values);
		// Send notification
		wp_mail( 'chart@nofrillsoil.com' , $title, $message);
		wp_mail( $customerEmail, $customerTitle, $customerMessage);
	}
	// Close the connection
	$stmt=null;
	$pdo=null;
?>