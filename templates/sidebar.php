<?php if (!is_singular('team' || 'client')) {
	dynamic_sidebar('sidebar-primary');
} ?>
<?php if (is_singular('team')) {
	get_template_part('templates/content', 'quote');
} ?>
<?php if (is_singular('client')) {
  get_template_part('templates/sidebar', 'client');
} ?>
<?php if (is_singular('page')) {
  get_template_part('templates/sidebar', 'items');
} ?>