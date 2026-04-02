<?php
// Logout Controller
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION = [];
session_destroy();
header("Location: " . ($base_url ?? '') . "login");
exit();
