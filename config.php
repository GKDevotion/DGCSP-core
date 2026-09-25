<?php

// =====================================================
// ROOT FILESYSTEM PATH
// =====================================================

define('ROOT_PATH', __DIR__);
define('FILE_VERSISON', '0.0.4');


// =====================================================
// DYNAMIC BASE URL
// =====================================================

$protocol = (
    !empty($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] !== 'off'
) ? 'https://' : 'http://';

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$mode = "local";

// Local / Live
if (
    $host === 'localhost' ||
    str_starts_with($host, 'localhost:') ||
    str_starts_with($host, '127.0.0.1') ||
    str_starts_with($host, '192.168')
) {

    define(
        'BASE_URL',
        $protocol . $host . '/core/devotion-group-csp/global'
    );

} else if( str_starts_with($host, 'shreegurve') ){

    define(
        'BASE_URL',
        $protocol . $host.'/dgcps'
    );
} else {
    define(
        'BASE_URL',
        $protocol . $host
    );

    $mode = "live";
}

define( 'MODE', $mode );

// =====================================================
// COMMON PATHS
// =====================================================

define('ELEMENTS_PATH', ROOT_PATH . '/elements');
define('ASSETS_PATH', ROOT_PATH . '/assets');

/**
 * get dynamic jurisdiction links
 */
function getJurisditionLink( $jurisdiction="" ){
    $jurisdictionArr = [
        'singapore' => ( MODE == "local" ) ? BASE_URL.'/singapore' : 'https://singapore.devotionglobalcsp.com',
        'hongkong' => ( MODE == "local" ) ? BASE_URL.'/hongkong' : 'https://hongkong.devotionglobalcsp.com',
        'mauritius' => ( MODE == "local" ) ? BASE_URL.'/mauritius' : 'https://mauritius.devotionglobalcsp.com',
        'india' => ( MODE == "local" ) ? BASE_URL.'/india' : 'https://india.devotionglobalcsp.com',
        'uae' => ( MODE == "local" ) ? BASE_URL.'/uae' : 'https://uae.devotionglobalcsp.com',
        'uk' => ( MODE == "local" ) ? BASE_URL.'/uk' : 'https://uk.devotionglobalcsp.com',
    ];

    return $jurisdictionArr[$jurisdiction];
}