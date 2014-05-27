<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'featured-image'); ?>
  <?php the_content(); ?>
<?php endwhile; ?>