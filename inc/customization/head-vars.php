<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

global $salv_head_vars;
global $salv_dark_mode;

require_once get_theme_file_path('inc/customization/colors.php');

require_once get_theme_file_path('inc/customization/colors-dark.php');

/*
 * ----------------------------# Do Action 'Extra' #----------------------------
**/

do_action('salv_head_vars_extra');

// $salv_head_vars = implode( " ", $salv_head_vars );
$salv_head_vars = implode("\n", $salv_head_vars);

// $salv_dark_mode = implode( " ", $salv_dark_mode );
$salv_dark_mode = implode("\n", $salv_dark_mode);

echo "\n<style type=\"text/css\">\n :root {\n", $salv_head_vars, "\n} \n</style>\n";

echo "\n<style type=\"text/css\">\n .t-dark-mode:root {\n", $salv_dark_mode, "\n} \n</style>\n";
