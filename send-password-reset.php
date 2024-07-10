<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'project');

$conn = mysqli_connect('localhost', 'root', '', 'project') or die(mysqli_error());

$email = $_POST["EmailId"];
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);
$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$sql = "UPDATE tblemployees SET reset_token_hash = ?, reset_token_expires_at = ? WHERE EmailId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $token_hash, $expiry, $email);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $mail = require __DIR__ . "/mailer.php";
    $mail->setFrom("aadityakolhapure28@gmail.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END
Click <a href="http://example.com/reset-password.php?token=$token">here</a> to reset your password.
END;

    try {
        $mail->send();
        echo "Message sent, please check your inbox.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
}