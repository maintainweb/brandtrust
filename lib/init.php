<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
    //'secondary_navigation' => __('Secondary Navigation', 'roots'),
    //'footer_navigation' => __('Footer Navigation', 'roots'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(180, 120, false);
  add_image_size('header-image', 1440, 400);
  update_option('thumbnail_size_w', 180);
  update_option('thumbnail_size_h', 120);
  update_option('thumbnail_crop', 0);
  update_option('medium_size_w', 420);
  update_option('medium_size_h', 300);
  update_option('large_size_w', 780);
  update_option('large_size_h', 780);

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  add_theme_support('post-formats', array(/*'aside',*/ 'gallery', 'link', 'image', /*'quote',*/ /*'status',*/ 'video', 'audio', /*'chat'*/));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');
