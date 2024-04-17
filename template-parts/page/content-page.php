<?php

/**
 * Template part to display page content in page.php.
 * @package HeroBiz
 */

?>

<article id="post-<?php the_ID(); ?>">
  <!-- Post title -->
  <header class="entry-header">
    <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
  </header>

  <!-- Post thumbnail -->
  <?php
  if (has_post_thumbnail()) :
    the_post_thumbnail('full');
  endif;
  ?>

  <!-- Post content -->
  <div class="entry-content">
    <?php
    the_content();

    wp_link_pages(array(
      'before'  => '<div class="page-links">' . esc_html__('Pages:', 'herobiz'),
      'after'   => '</div>',
    ));
    ?>
  </div>

  <?php if (get_edit_post_link()) : ?>
    <footer class="entry-footer">
      <?php
      edit_post_link(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __('Edit <span class="screen-reader-text">%s</span>', 'herobiz'),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          get_the_title()
        ),
        '<span class="edit-link">',
        '</span>',
      );
      ?>
    </footer>
  <?php endif; ?>
</article>