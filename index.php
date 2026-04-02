<?php
/**
 * Simple Router for SD Cendekia Website
 */

require_once 'application/config/database.php';

// Get the URI and clean it
$base_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Load Routes
require_once 'application/config/routes.php';

// If running in a subfolder (like Laragon's /Website_SD_Project/)
$base_url = $base_path === '/' ? '/' : $base_path . '/';

if ($base_path !== '/' && strpos($path, $base_path) === 0) {
    $path = substr($path, strlen($base_path));
}

$path = trim($path, '/');

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
    echo "<a href='./'>Kembali ke Beranda</a>";
}
