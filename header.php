<?php if (! defined('ABSPATH')) {
  die;
} // Cannot access directly.
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php echo salv_isset($_COOKIE['js-dark-mode-toggle']) ? 'class="t-dark-mode"' : ''; ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta name="template" content="<?php echo base64_decode(SALV_THEME) . ' ' . SALV_VERSION; ?>">
  <?php
  if (! function_exists('salv_after_setup_theme')) {
    exit;
  }

  do_action('salv_before_wp_head');

  wp_head();

  do_action('salv_after_wp_head');
  ?>
</head>

<body <?php body_class('salv-body'); ?>>

  <?php wp_body_open(); ?>

  <?php do_action('salv_body_open'); ?>

  <?php
  if (apply_filters('salv_get_template_part_header', true)) {
    get_template_part('template-parts/header/header', apply_filters('salv_get_template_part_header_name', null));
  }
