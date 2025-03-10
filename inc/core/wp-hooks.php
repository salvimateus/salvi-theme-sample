<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

/*
 * ----------------------------# WP Actions #----------------------------
**/

add_action('after_setup_theme', 'salv_after_setup_theme');
if (!function_exists('salv_after_setup_theme')) {
  function salv_after_setup_theme() {
    if (apply_filters('salv_register_menus', true)) {
      register_nav_menus(array('menu-1' => __('Principal', 'salvi-theme-sample')));
    }

    if (apply_filters('salv_load_textdomain', true)) {
      add_filter('locale', 'salv_localised');
      function salv_localised($locale) {
        if (isset($_GET['l'])) {
          return sanitize_key($_GET['l']);
        }
        return $locale;
      }
      load_theme_textdomain('salvi-theme-sample', get_template_directory() . '/languages');
    }

    if (apply_filters('salv_add_theme_support', true)) {
      add_theme_support('title-tag');

      add_theme_support('menus');

      add_post_type_support('page', 'excerpt');

      if (apply_filters('salv_add_automatic_feed_links', true)) {
        add_theme_support('automatic-feed-links');
      }

      add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      ));

      if (apply_filters('salv_add_custom_logo', true)) {
        add_theme_support('custom-logo', array(
          'height' => 150,
          'width' => 350,
          'flex-height' => true,
          'flex-width' => true,
          'header-text' => array('salv-site-title', 'salv-site-description'), // classes of elements to hide
        ));
      }

      /*
        * ------# Salvi Image Sizes #------
      **/
      if (apply_filters('salv_add_image_sizes', true)) {
        add_theme_support('post-thumbnails');

        set_post_thumbnail_size(300, 300, true);

        add_image_size('salv-thumbnail', 160, 120, true);
      }
    }
  }
}

add_action('wp_head', 'salv_wp_head', 5);
if (!function_exists('salv_wp_head')) {
  function salv_wp_head() {
    if (apply_filters('salv_head_tags', true)) {
      require_once get_theme_file_path('inc/customization/head-tags.php');
    }

    if (apply_filters('salv_head_vars', true)) {
      require_once get_theme_file_path('inc/customization/head-vars.php');
    }
  }
}

add_action('wp_enqueue_scripts', 'salv_enqueue_theme');
if (!function_exists('salv_enqueue_theme')) {
  function salv_enqueue_theme() {
    if (apply_filters('salv_enqueue_parent_style', true)) {
      wp_register_style('salvi-theme-sample-parent-style', get_template_directory_uri() . '/assets/css/style.css', array(), SALV_VERSION, 'all');

      wp_enqueue_style('salvi-theme-sample-parent-style');
    }

    if (apply_filters('salv_enqueue_google_fonts', true)) {
      wp_register_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        array(),
        null,
        'all'
      );

      wp_enqueue_style('google-fonts');
    }

    if (apply_filters('salv_enqueue_rtl_style', true)) {
      wp_style_add_data('salvi-theme-sample-parent-style', 'rtl', 'replace');
    }

    if (apply_filters('salv_enqueue_jscookie_js', true)) {
      wp_register_script('jscookie', get_template_directory_uri() . '/inc/vendor/jscookie/jscookie.min.js', array(), '2.2.1', true);

      wp_enqueue_script('jscookie');
    }

    if (apply_filters('salv_enqueue_theme_js', true)) {
      wp_register_script('salvi-theme-sample-theme-js', get_template_directory_uri() . '/assets/js/salv-theme.js', array(), SALV_VERSION, true);

      wp_enqueue_script('salvi-theme-sample-theme-js');
    }
  }
}

add_action('admin_enqueue_scripts', 'salv_enqueue_admin');
if (!function_exists('salv_enqueue_admin')) {
  function salv_enqueue_admin() {
    if (apply_filters('salv_enqueue_admin_style', true)) {
      wp_register_style('salvi-theme-sample-admin-style', get_template_directory_uri() . '/assets/css/style-admin.css', array(), SALV_VERSION, 'all');

      wp_enqueue_style('salvi-theme-sample-admin-style');
    }

    if (apply_filters('salv_enqueue_admin_js', true)) {
      wp_register_script('salvi-theme-sample-admin-js', get_template_directory_uri() . '/assets/js/salv-admin.js', array(), SALV_VERSION, false);

      wp_enqueue_script('salvi-theme-sample-admin-js');
    }
  }
}

add_action('widgets_init', 'salv_widgets_init');
if (!function_exists('salv_widgets_init')) {
  function salv_widgets_init() {
    if (apply_filters('salv_register_sidebar_primary', true)) {
      register_sidebar(
        array(
          'name'       => esc_html__('Sidebar Primária', 'salvi-theme-sample'),
          'id'       => 'salv-sidebar-primary',
          'before_widget'   => '<div id="%1$s" class="s-widget %2$s">',
          'after_widget'   => '</div>',
          'before_title'   => '<div class="s-widget-title"><h3>',
          'after_title'   => '</h3></div>',
        )
      );
    }
  }
}

/*
 * ----------------------------# WP Filters #----------------------------
**/
