<?php
/**
 * Simple Router for SD Cendekia Website
 */

// Load Configuration and Constants
require_once 'application/config/config.php';
require_once 'application/config/constanta.php';
require_once 'application/config/session.php';
require_once 'application/config/database.php';
require_once 'application/config/routes.php';

// Get the actual URI and clean it
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// If running in a subfolder, remove base_path from path
$base_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($base_path !== '/' && strpos($path, $base_path) === 0) {
    $path = substr($path, strlen($base_path));
}

$path = trim($path, '/');

// Initialize Database connection for models
$conn = connectDB();

// Load Models
require_once 'application/models/Admin_model.php';
require_once 'application/models/Message_model.php';
require_once 'application/models/Profile_model.php';

$Admin_model = new Admin_model($conn);
$Message_model = new Message_model($conn);
$Profile_model = new Profile_model($conn);

// Route matching
if (array_key_exists($path, $routes)) {
    $view = $routes[$path];
    
    // Check if it's a controller or a view
    if (strpos($view, 'controllers/') === 0) {
        include 'application/' . $view;
    } else {
        // It's a view
        include 'application/views/' . $view;
    }
} else {
    // 404 Not Found
    http_response_code(404);
    echo "<h1>404 - Halaman Tidak Ditemukan</h1>";
    echo "<p>Maaf, halaman yang Anda cari tidak tersedia.</p>";
    echo "<a href='" . $base_url . "'>Kembali ke Beranda</a>";
}
