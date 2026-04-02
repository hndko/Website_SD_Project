// Contact Controller - Handles form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$conn = connectDB();

// Sanitize input
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);

// Insert into database
$sql = "INSERT INTO `messages` (`name`, `email`, `phone`, `subject`, `message`)
VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
header("Location: " . ($base_url ?? '') . "kontak?status=success");
} else {
header("Location: " . ($base_url ?? '') . "kontak?status=error");
}

$conn->close();
} else {
header("Location: " . ($base_url ?? '') . "kontak");
}
exit();