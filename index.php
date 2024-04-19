<?php

/**
 * @package HeroBiz
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        get_template_part('template-parts/post/content');
      endwhile;

      echo paginate_links(array(
        'prev_text'  => esc_html__('Prev', 'herobiz'),
        'next_text'  => esc_html__('Next', 'herobiz'),
      ));

    else :
      get_template_part('template-parts/page/content', 'none');
    endif;
    ?>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php
get_footer();
