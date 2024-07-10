<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'project');

$conn = mysqli_connect('localhost', 'root', '', 'project') or die(mysqli_error());

$token = $_POST["token"];

$token_hash = hash("sha256", $token);

$sql = "SELECT * FROM tblemployees
        WHERE reset_token_hash = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$tblemployees = $result->fetch_assoc();

if ($tblemployees === null) {
    die("Token not found");
}

if (strtotime($tblemployees["reset_token_expires_at"]) <= time()) {
    die("Token has expired");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "UPDATE tblemployees
        SET Password = ?,
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE emp_id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("si", $password_hash, $tblemployees["emp_id"]);

$stmt->execute();

echo "Password updated. You can now login.";
?>
