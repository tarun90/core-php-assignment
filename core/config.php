<?php
/**
 * All Global constant
 */

session_start();

/* Enable or disable error reporting  */
$error_display = 1;
if ($error_display) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

/**
 * Assign site name
 */
define('SITE_NAME', 'Core PHP Assignment');

/**
 * Assign site url
 */
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . SITE_NAME . '/');

/**
 * Assign site path
 */
define('SITE_PATH', $_SERVER["DOCUMENT_ROOT"] . '/' . SITE_NAME . '/');

/**
 * Assign assets path
 */
define('ASSETS_URL', SITE_URL . 'public/');