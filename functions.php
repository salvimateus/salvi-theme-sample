<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

/*
 * ----------------------------# Global #----------------------------
**/

define('SALV_VERSION', '0.0.1');

define('SALV_THEME', 'U2FsdmkgVGhlbWUgU2FtcGxl');

$salv_head_vars = array();

$salv_version_min = null;

/*
 * ----------------------------# Minimum Version #----------------------------
**/

require_once get_template_directory() . '/inc/core/version-min.php';

if ($salv_version_min) {
  return;
}

/*
 * ----------------------------# Helpers #----------------------------
**/

require_once get_theme_file_path('inc/core/helpers.php');

/*
 * ----------------------------# WP Hooks #----------------------------
**/

require_once get_theme_file_path('inc/core/wp-hooks.php');

/*
 * ----------------------------# General #----------------------------
**/



/*
 * ----------------------------# Vendor #----------------------------
**/
