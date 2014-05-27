<?php
$imagetitle = get_field('image_title');
?>
<?php while (have_posts()) : the_post(); ?>
  <div class="image-wrapper">
    <h2 class="image-title"><?php echo $imagetitle; ?></h2>
    <?php get_template_part('templates/content', 'featured-image'); ?>
  </div>
  <?php the_content(); ?>
<?php endwhile; ?>