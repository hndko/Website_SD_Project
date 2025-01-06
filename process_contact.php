<?php
// Mengatur header untuk JSON
header('Content-Type: application/json');
error_reporting(0);
ini_set('display_errors', 0);

require_once 'config/config.php';

// Establish database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]));
}

// Mengambil data dari formulir
$name = $conn->real_escape_string($_POST['nama']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['telepon']);
$subject = $conn->real_escape_string($_POST['subjek']);
$message = $conn->real_escape_string($_POST['pesan']);

// Menyimpan data ke dalam tabel messages
$sql = "INSERT INTO `messages` (`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success', 'message' => 'Pesan berhasil dikirim!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error]);
}
