<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.
?>

<nav class="c-main-nav">
  <div class="c-main-nav__wrap">
    <?php
    $args = [
      'container_id' => 'js-menu-1',
      'menu_id' => 'menu-1',
      'theme_location' => 'menu-1'
    ];

    wp_nav_menu($args);
    ?>
  </div>
</nav>

<header class="c-main-header">
  <div class="c-main-header__wrap">
    <div class="c-main-header__logo">
      <a href="<?php echo get_home_url(); ?>" alt="Back to homepage">
        <img src="https://placehold.co/300x120/B73030/FFFFFF?text=Sample Logo">
      </a>
    </div>

    <div class="c-main-header__aside">
      <?php require get_theme_file_path('template-parts/misc/social-media.php'); ?>
    </div>
  </div>
</header>
