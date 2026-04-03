<?php
/**
 * Database Configuration and Connection Wrapper
 */

// Database Credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sd_website');

// Check if MySQLi extension is loaded
if (!extension_loaded('mysqli')) {
    die('MySQLi extension is not loaded.');
}

// Koneksi database
function connectDB()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Cek login admin
function checkAdminLogin()
{
    global $base_url;
    if (!isset($_SESSION['admin_id'])) {
        header("Location: " . ($base_url ?? '') . "login");
        exit();
    }
}
