<?php if (!is_singular('team', 'client') || is_home() || !is_post_type_archive()) {
	dynamic_sidebar('sidebar-primary');
} ?>
<?php if (is_page() || is_post_type_archive('client', 'team')) { ?>
  <h3><?php echo the_field('sidebar_title'); ?></h3>
  <?php
  get_template_part('templates/sidebar', 'item');
  get_template_part('templates/sidebar', 'downloads');
  } ?>
<?php if (is_singular('team') || is_post_type_archive('client', 'team')) {
  get_template_part('templates/content', 'quote');
} ?>
<?php if (is_singular('client') || is_post_type_archive('client', 'team')) {
  get_template_part('templates/sidebar', 'client');
} ?>