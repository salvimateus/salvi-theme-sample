<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

/*
 * ----------------------------# Useful #----------------------------
**/

function salv_filter_turn_off($filter) {
  add_filter($filter, function () {
    return false;
  });
}

function salv_filter_custom_part($slug, $name) {
  add_filter($slug, function () use ($name) {
    return $name;
  });
}

function salv_isset(&$var, $default = null) {
  return isset($var) ? $var : $default;
}

/*
 * ----------------------------# Options #----------------------------
**/

function salv_opt_style($item = '', $default = null) {
  $options = ''; // get from acf options, for instance

  return (isset($options[$item])) ? $options[$item] : $default;
}

/*
 * ----------------------------# Do Action #----------------------------
**/

if (!function_exists('wp_body_open') && apply_filters('salv_wp_body_open', true)) {
  function wp_body_open() {
    do_action('wp_body_open');
  }
}
