<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

get_header();

if (is_singular()) {
  get_template_part('template-parts/single'); // placeholder
} elseif (is_archive() || is_home()) {
  get_template_part('template-parts/main/archive'); // it works
} elseif (is_search()) {
  get_template_part('template-parts/search'); // placeholder
} else {
  get_template_part('template-parts/404'); // placeholder
}

get_footer();
