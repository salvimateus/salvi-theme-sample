<?php
/*
 * Template Name: Salvi - Art
 * Template Post Type: page, post
 */

if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

salv_filter_turn_off('salv_get_template_part_header');
// salv_filter_turn_off('salv_get_template_part_footer');
salv_filter_custom_part('salv_get_template_part_footer_name', 'custom');

get_header();
?>

<div id="l-wrap-middle">
  <div id="l-wrap-content">
    <div id="l-wrap-content-inner">
      <main id="l-main-content" role="main">
        <h1>Heading 1 Lorem Ipsum</h1>
        <h2>Heading 2 Lorem Ipsum</h2>
        <h3>Heading 3 Lorem Ipsum</h3>
        <h4>Heading 4 Lorem Ipsum</h4>
        <h5>Heading 5 Lorem Ipsum</h5>
        <h6>Heading 6 Lorem Ipsum</h6>

        <div class="superteste" style="border: 2px solid red; padding: 20px; z-index: 999999; background:#fff;">caixa vermelha</div>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem amet laudantium accusantium a! Maxime similique perspiciatis fugiat repellendus animi tempora vitae, nam dolorum! Atque officiis hic laborum a non delectus.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem amet laudantium accusantium a! Maxime similique perspiciatis fugiat repellendus animi tempora vitae, nam dolorum! Atque officiis hic laborum a non delectus.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem amet laudantium accusantium a! Maxime similique perspiciatis fugiat repellendus animi tempora vitae, nam dolorum! Atque officiis hic laborum a non delectus.</p>
      </main>

      <aside id="l-aside-primary">aside primary</aside>
    </div>

    <aside id="l-aside-left-content">
      <div class="s-aside-sticky">
        left
        <div class="widget-test">widget teste</div>
      </div>
    </aside>

    <aside id="l-aside-right-content">
      <div class="s-aside-sticky">right</div>
    </aside>
  </div>

  <aside id="l-aside-before-content">
    <div class="l-container l-center">aside-before-content</div>
  </aside>

  <aside id="l-aside-after-content">
    <div class="l-container l-center">aside-after-content</div>
  </aside>
</div>

<?php get_footer();
