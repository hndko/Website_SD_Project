<?php
// Contact Controller - Handles form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Input is sanitized inside the model
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Use Message_model to handle data
    if ($Message_model->create($name, $email, $phone, $subject, $message)) {
        header("Location: " . ($base_url ?? '') . "kontak?status=success");
    } else {
        header("Location: " . ($base_url ?? '') . "kontak?status=error");
    }
} else {
    header("Location: " . ($base_url ?? '') . "kontak");
}
exit();