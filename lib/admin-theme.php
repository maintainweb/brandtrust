<?php

function admin_theme_style() {
    wp_enqueue_style('brandtrust', get_bloginfo('template_directory') . "/assets/css/wp-admin.css");
}
add_action('admin_enqueue_scripts', 'admin_theme_style');
add_action('login_enqueue_scripts', 'admin_theme_style');