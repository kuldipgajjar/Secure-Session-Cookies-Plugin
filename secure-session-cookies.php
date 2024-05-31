<?php
/**
 * Plugin Name: Secure Session Cookies
 * Description: Ensures the PHPSESSID cookie has Secure, HttpOnly, and SameSite attributes.
 * Version: 1.0
 */

// Hook into the 'init' action
add_action('init', 'set_secure_session_cookies', 1);

function set_secure_session_cookies() {
    // Check if the session is not already started
    if (session_status() === PHP_SESSION_NONE) {
        // Determine if the connection is secure
        $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
        
        // Set session cookie parameters
        session_set_cookie_params([
            'lifetime' => 0, // Session cookie
            'path' => '/',
            'domain' => $_SERVER['HTTP_HOST'], // Current domain
            'secure' => $secure, // Only send over HTTPS
            'httponly' => true, // Prevent JavaScript access
            'samesite' => 'Strict' // Mitigate CSRF
        ]);
        
        // Start the session
        session_start();
    }
}
