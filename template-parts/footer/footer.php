<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.
?>

<footer class="c-main-footer s-salv-content">
  <div class="c-main-footer__row c-main-footer__row--bg">
    <div class="c-main-footer__wrap">
      <div class="c-main-footer__logo">
        <a href="<?php echo get_home_url(); ?>" alt="Back to homepage - Website logo">
          <img src="https://placehold.co/300x120/B73030/FFFFFF?text=Sample Logo" alt="Back to homepage - Website logo">
        </a>
      </div>

      <div class="c-main-footer__aside">
        <?php require get_theme_file_path('template-parts/misc/social-media.php'); ?>
      </div>
    </div>
  </div>

  <div class="c-main-footer__row">
    <div class="c-main-footer__wrap">
      <div class="c-main-footer__logo">
        <p><strong><?php echo get_option('blogname'); ?>
            © <?php the_time('Y'); ?>.</strong> All rights reserved.</p>
        <p>Optimized WordPress Theme <a href="" target="_blank">Mateus Salvi</a> ®</p>
      </div>

      <div class="c-main-footer__aside">
        <a href="#">Privacy Policy</a>
      </div>
    </div>
  </div>

</footer>

<label for="js-dark-mode-toggle" id="js-dark-mode-wrap" <?php echo salv_isset($_COOKIE['js-dark-mode-toggle']) ? 'class="is-dark-mode--on"' : ''; ?>>
  <input type="checkbox" name="js-dark-mode-toggle" id="js-dark-mode-toggle" <?php echo salv_isset($_COOKIE['js-dark-mode-toggle']) ? 'checked' : ''; ?>>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-mode-icon.svg" alt="Toggle Dark Mode" />
</label>
