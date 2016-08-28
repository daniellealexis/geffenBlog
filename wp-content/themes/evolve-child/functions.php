<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/

function custom_enqueue_child_theme_styles() {
    wp_register_style('parent-theme', get_template_directory_uri() . '/style.css');
    wp_register_style('child-theme', get_stylesheet_uri(), array('parent-theme') );
    wp_enqueue_style('child-theme');
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_child_theme_styles', 11 );

?>