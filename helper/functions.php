<?php

// =====================================================
// ROOT FILESYSTEM PATH
// =====================================================

define('ROOT_PATH', __DIR__);


// =====================================================
// DYNAMIC BASE URL
// =====================================================

$protocol = (
    !empty($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] !== 'off'
) ? 'https://' : 'http://';

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';


// Local / Live
if (
    $host === 'localhost' ||
    str_starts_with($host, 'localhost:') ||
    str_starts_with($host, '127.0.0.1:')
) {

    define(
        'BASE_URL',
        $protocol . $host . '/devotion-group-csp'
    );

} else {

    define(
        'BASE_URL',
        $protocol . $host
    );
}


// =====================================================
// COMMON PATHS
// =====================================================

define('ELEMENTS_PATH', ROOT_PATH . '/elements');
define('ASSETS_PATH', ROOT_PATH . '/assets');