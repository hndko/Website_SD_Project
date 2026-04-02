<?php
/**
 * Route Configuration
 * Map URI paths to view/controller files
 */

$routes = [
    '' => 'frontend/home.php',
    'profil' => 'frontend/profil.php',
    'fasilitas' => 'frontend/fasilitas.php',
    'galeri' => 'frontend/galeri.php',
    'kontak' => 'frontend/kontak.php',
    'login' => 'auth/login.php',
    'admin' => 'backend/dashboard.php',
    'admin/dashboard' => 'backend/dashboard.php',
    'admin/messages' => 'backend/messages.php',
    
    // Controllers / Actions
    'contact/submit' => 'controllers/Contact.php',
    'logout' => 'controllers/Logout.php'
];
