<?php if (! defined('ABSPATH')) {
  die;
} // Cannot access directly.

if (version_compare(PHP_VERSION, '5.5', '<')) {
  $GLOBALS['salv_version_min'] = true;
}

if (version_compare($GLOBALS['wp_version'], '4.9', '<')) {
  $GLOBALS['salv_version_min'] = true;
}

if (!empty($GLOBALS['salv_version_min'])) {
  wp_die(
    __('Your WordPress theme requires at least PHP 5.5 and WordPress 4.9 to function properly.', 'salvi-theme-sample'),
    __('Theme Error', 'salvi-theme-sample'),
    array('response' => 500, 'back_link' => true)
  );
}
