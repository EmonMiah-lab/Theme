<?php
// Function to enqueue styles and scripts
function my_theme_enqueue_styles() {
    // Enqueue the main stylesheet (style.css)
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue additional stylesheets
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');

    // Enqueue Google Fonts (Optional)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', false);

    // Enqueue JavaScript files
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

// Register Enqueue (bootstrap.css):
wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '5.0.2', 'all');

wp_enqueue_style('bootstrap');



}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>
