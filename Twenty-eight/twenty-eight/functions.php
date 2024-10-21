<?php
function yourtheme_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_styles' );

function yourtheme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
}
add_action( 'after_setup_theme', 'yourtheme_setup' );



// Include the enqueue file
require get_template_directory() . '/enqueue.php';


// Include the menu registration file
require get_template_directory() . '/menu_register.php';



// Widgets Register
include_once('inc/widgets_register.php');



// Include post setup configuration
require get_template_directory() . '/post_setup.php';



// Include blog setup configuration
require get_template_directory() . '/blog_setup.php';
