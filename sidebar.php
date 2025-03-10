<?php if (! defined('ABSPATH')) {
  die;
} // Cannot access directly.

if (is_active_sidebar('sample')) {
  dynamic_sidebar('sample');
}
