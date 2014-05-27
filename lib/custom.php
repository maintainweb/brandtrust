<?php
/**
 * Custom functions
 */
require_once locate_template('/lib/post-types.php');          // Custom functions
require_once locate_template('/lib/admin-theme.php');          // Custom functions
require_once locate_template('/lib/shortcodes.php');          // Custom functions

add_filter('the_field', 'do_shortcode');
add_filter('get_field', 'do_shortcode');
add_filter('the_sub_field', 'do_shortcode');
add_filter('get_sub_field', 'do_shortcode');

if( !function_exists('wpex_fix_shortcodes') ) {
    function wpex_fix_shortcodes($content){
        $array = array (
            '<p>[' => '[',
            ']</p>' => ']',
            ']<br />' => ']'
        );
        $content = strtr($content, $array);
        return $content;
    }
    add_filter('the_content', 'wpex_fix_shortcodes');
}