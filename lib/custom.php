<?php
/**
 * Custom functions
 */
require_once locate_template('/lib/post-types.php');          // Custom functions
require_once locate_template('/lib/admin-theme.php');          // Custom functions

add_filter('the_field', 'do_shortcode');
add_filter('get_field', 'do_shortcode');
add_filter('the_sub_field', 'do_shortcode');
add_filter('get_sub_field', 'do_shortcode');