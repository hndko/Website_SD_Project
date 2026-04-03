<?php

/**
 * Session Configuration and Initialization
 */

// Set session security settings
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);

// Custom session name (optional)
session_name('SD_CENDEKIA_SESS');

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

/**
 * Check if a user is logged in
 * @return bool
 */
function is_logged_in()
{
    return isset($_SESSION['admin_id']);
}

/**
 * Get the current user ID
 * @return int|null
 */
function get_user_id()
{
    return $_SESSION['admin_id'] ?? null;
}
