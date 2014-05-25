<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'video-shortcode'); ?>
  <?php the_content(); ?>
<?php endwhile; ?>