<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.
?>

<footer class="c-main-footer s-salv-content">
  <div class="c-main-footer__row c-main-footer__row--bg">
    <div class="c-main-footer__wrap">
      <div class="c-main-footer__logo">
        <a href="<?php echo get_home_url(); ?>" alt="Back to homepage">
          <img src="https://placehold.co/300x120/B73030/FFFFFF?text=Sample Logo">
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
  <svg fill="#FFF" width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
    <g>
      <path d="M18,27H14a2,2,0,0,1-2-2V21.16a10,10,0,0,1-6-9.47A10.14,10.14,0,0,1,15.69,2h0A10,10,0,0,1,20,21.16V25A2,2,0,0,1,18,27ZM15.75,4A8.12,8.12,0,0,0,8,11.75a8,8,0,0,0,5.33,7.79,1,1,0,0,1,.67.94V25h4V20.48a1,1,0,0,1,.67-.94,8,8,0,0,0,2.9-13.28A7.85,7.85,0,0,0,15.75,4Z" />
      <path d="M19,30H13a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z" />
      <path d="M15,24V19.48a9,9,0,0,1-6-8.76c.09-3,1.71-4.93,4.52-6.32C9.49,4.47,7.12,8,7,11.72a9,9,0,0,0,6,8.76V25a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1H16A1,1,0,0,1,15,24Z" />
    </g>
  </svg>
</label>
