<?php if (! defined('ABSPATH')) {
  die;
} // Cannot access directly.

if (apply_filters('salv_get_template_part_footer', true)) {
  get_template_part('template-parts/footer/footer', apply_filters('salv_get_template_part_footer_name', null));
}
?>

<div class="salv-dark-overlay"></div>

<?php do_action('salv_before_wp_footer'); ?>

<?php wp_footer(); ?>

<?php do_action('salv_after_wp_footer_body_close'); ?>

</body>

</html>
