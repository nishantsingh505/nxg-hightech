<?php
/**
 * NXG Hightech - Global Configuration & Helpers
 * Optimized for Hostinger LiteSpeed Web Server & PHP 8.x
 */

// Define global constants if not already defined
if (!defined('SITE_NAME')) {
    define('SITE_NAME', 'NXG HIGHTECH');
    define('SITE_TAGLINE', 'Authorised Siemens Digital Industries Software Partner');
    define('COMPANY_FULL_NAME', 'NXG Hightech (P) Ltd');
    
    // Official Contact Information
    define('CONTACT_PHONE_PRIMARY', '+91 95400 94200');
    define('CONTACT_PHONE_SECONDARY', '+91 98186 72929');
    define('CONTACT_PHONE_TEL', '+919540094200');
    define('CONTACT_EMAIL_INFO', 'info@nxghightech.com');
    define('CONTACT_EMAIL_SIEMENS', 'siemens@nxghightech.com');
    define('OFFICE_ADDRESS', '827, T3, Golden-I, Tech Zone IV, Greater Noida West, Uttar Pradesh - 201009, India');
    
    // Social Links
    define('LINK_LINKEDIN', 'https://linkedin.com');
    define('LINK_YOUTUBE', 'https://youtube.com/@nxghightech');
    define('LINK_FACEBOOK', 'https://facebook.com');
    define('LINK_INSTAGRAM', 'https://instagram.com');
    
    // Base URL Detection
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    $baseUri = rtrim($scriptDir, '/');
    define('BASE_URL', $protocol . $host . $baseUri);
}

/**
 * Helper function to output active navigation classes
 * @param string $page The page identifier to check
 * @param string|null $currentActive The currently active page variable
 * @param string $activeClasses Classes when active
 * @param string $inactiveClasses Classes when inactive
 * @return string
 */
function navActiveClass($page, $currentActive, $activeClasses = 'text-[#0084d6] font-bold border-b-2 border-[#0084d6] pb-1 text-sm', $inactiveClasses = 'text-slate-700 hover:text-[#0084d6] transition-colors text-sm font-semibold') {
    return ($page === $currentActive) ? $activeClasses : $inactiveClasses;
}

/**
 * Mobile nav active helper
 */
function mobileNavActiveClass($page, $currentActive) {
    if ($page === $currentActive) {
        return 'mobile-nav-link flex items-center justify-between text-[#0084d6] bg-blue-50/70 px-3 py-2 rounded-lg font-bold';
    }
    return 'mobile-nav-link flex items-center justify-between text-slate-700 hover:text-[#0084d6] px-3 py-2 rounded-lg hover:bg-slate-50 transition font-medium';
}

/**
 * Clean string helper for XSS prevention
 */
function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data ?? '')), ENT_QUOTES, 'UTF-8');
}
