<?php if (!is_singular('team', 'client') || is_home()) {
	dynamic_sidebar('sidebar-primary');
} ?>
<?php if (is_singular('team')) {
	get_template_part('templates/content', 'quote');
} ?>
<?php if (is_singular('client')) {
  get_template_part('templates/sidebar', 'client');
} ?>
<?php if (is_page()) { ?>
  <h3><?php echo the_field('sidebar_title'); ?></h3>
  <?php
  get_template_part('templates/sidebar', 'item');
  get_template_part('templates/sidebar', 'downloads');
} ?>