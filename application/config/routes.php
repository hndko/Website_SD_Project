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

    // Backend Routes (Simplified)
    'dashboard' => 'backend/dashboard/index.php',
    'messages' => 'backend/messages/index.php',
    'profile' => 'backend/profile/index.php',
    'gallery' => 'backend/gallery/index.php',

    // Controllers / Actions
    'contact/submit' => 'controllers/Contact.php',
    'logout' => 'controllers/Logout.php'
];
